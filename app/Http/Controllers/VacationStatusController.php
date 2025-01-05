<?php

namespace App\Http\Controllers;

use App\Models\VacationStatus;
use App\Http\Requests\StoreVacationStatusRequest;
use App\Http\Requests\UpdateVacationStatusRequest;

class VacationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacationStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VacationStatus $vacationStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VacationStatus $vacationStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacationStatusRequest $request, VacationStatus $vacationStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VacationStatus $vacationStatus)
    {
        //
    }
}
