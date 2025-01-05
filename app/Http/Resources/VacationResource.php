<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Vacation */
class VacationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'startDate'=>$this->start_date,
            'endDate'=>$this->end_date,
            'status'=>new VacationStatusResource($this->status),
            'vacationType'=>new VacationTypeResource($this->whenLoaded('vacationType')),
            'user'=>new UserResource($this->whenLoaded('user')),
        ];
    }
}
