<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'gender',
        'company_representing',
        'reason_for_visit',
        'entry_time',
        'leave_time'
    ];
}
