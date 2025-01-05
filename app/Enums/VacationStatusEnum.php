<?php

namespace App\Enums;

enum VacationStatusEnum: string
{
    case PENDING = "pending";
    case APPROVED = "approved";
    case REJECTED = "rejected";
    case CANCELLED = "canceled";
    case FINISHED = "finished";
}
