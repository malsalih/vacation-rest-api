<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacationRequest;
use App\Http\Requests\UpdateVacationRequest;
use App\Http\Resources\VacationBalanceResource;
use App\Http\Resources\VacationCollection;
use App\Http\Resources\VacationResource;
use App\Models\User;
use App\Models\Vacation;
use App\Models\VacationBalance;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class VacationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacations = Vacation::with(['vacationType', 'user', 'status'])->paginate(5);

        return new VacationCollection($vacations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacationRequest $request)
    {
        $user = Auth::user()->load('vacationBalance');
        $type = $request->vacation_type_id;
        $balance      = VacationBalanceResource::collection($user->vacationBalance);
        $checkBalance = $balance->collection->filter(function ($item) use ($type)
        {
            return $item->vacation_type_id === $type;
        })->first();
        $days = date_diff(Carbon::parse($request->start_date), Carbon::parse($request->end_date));
        if ($checkBalance)
        {

            if ($checkBalance->balance < $days->days + 1 && $type != 4)
            {
                return response()->json(['message' => 'رصيد الاجازة غير كافي'], 422);
            }

            $vacation = new Vacation();
            $vacation->fill([
                'user_id'          => $user->id,
                'vacation_type_id' => $request->vacation_type_id,
                'start_date'       => $request->start_date,
                'end_date'         => $request->end_date,
                'status_id'        => 1,
                'notes'            => $request->notes,
            ])->with(['vacationType', 'user']);

            $vacation->save();

            return response()->json(new VacationResource($vacation), 200);
        }

        return response()->json(["message" => 'لايوجد رصيد اجازة بنوع الاجازة المطلوب'], 422);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vacation = Vacation::with(['vacationType', 'user', 'status'])->find($id);
        return new VacationResource($vacation);
    }

    public function statusUpdate(Request $request, $id)
    {
        $vacation = Vacation::find($id);
        $type = $vacation->vacation_type_id;
        if (!$vacation)
        {
            return response()->json(["message" => 'لم يتم العثور على الااجازة'], 404);
        }
        if ($type == $request->statusId)
        {
            return response()->json(["message" => 'لايمكن تحديث حالة الاجازة'], 422);
        }
        $dateDiff = date_diff(Carbon::parse($vacation->start_date), Carbon::parse($vacation->end_date));
        $hours = $dateDiff->h;
        $days = $dateDiff->days + 1;
        $vacationBalance = VacationBalance::where('vacation_type_id', '=', $type)->where('user_id', '=', Auth::user()->id)->first();
        $newBalance =  $type == 4 ? $vacationBalance->balance + $hours : $vacationBalance->balance - $days;
        if ($vacationBalance->balance < $days && $type != 4)
        {
            return response()->json(["message" => 'رصيد الاجازة لايكفي'], 422);
        }
        $vacation->update([
            "status_id" => $request->statusId,
        ]);
        $vacationBalance->update([
            "balance" => $newBalance,
        ]);

        return response()->json(["message" => 'تم تحديث الحالة بنجاح'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacationRequest $request, Vacation $vacation)
    {
        //

    }

    public function createBalance(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'types' => 'required|exists:vacation_types,id',
        ]);

        $types = array_unique($request->types);

        try
        {

            foreach ($types as $key => $value)
            {

                $vB = VacationBalance::firstOrCreate([
                    "vacation_type_id" => $value,
                    "user_id" => $request->user_id
                ], [
                    "vacation_type_id" => $value,
                    "user_id" => $request->user_id
                ]);
                if ($vB)
                {

                    return response()->json(["message" => "تم اضافة الرصيد بنجاح"], 200);
                }
                return response()->json(["message" => ""], 200);
            }
        }
        catch (\Throwable $th)
        {
            throw new Exception("Error Processing Request", 1);;
        }
    }
    public function cancel($id)
    {
        $vacation = Vacation::find($id);
        if ($vacation)
        {
            $vacation->delete();
            return response()->json(["message" => 'تم الغاء الاجازة بنجاح'], 200);
        }
        return response()->json(["message" => 'لم يتم العثور على الاجازة'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacation $vacation)
    {
        //
    }
}
