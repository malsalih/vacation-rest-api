<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'                       => $this->id,
            'name'                     => $this->name,
            'userName'                 => $this->user_name,
            'email'                    => $this->email,
            'emailVerifiedAt'          => $this->email_verified_at,
            'notificationsCount'       => $this->notifications_count,
            'readNotificationsCount'   => $this->read_notifications_count,
            'unreadNotificationsCount' => $this->unread_notifications_count,
            'balance'                  => VacationBalanceResource::collection($this->whenLoaded('vacationBalance')),
        ];
    }
}
