<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedShift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'DesireWorkingDate',
        'DesireStartTime',
        'DesireEndTime',
        'remarks',
        'StartPeriod',
        'EndPeriod',
    ];
}
