<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeavePolicy extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'leave_policy';

    protected $fillable = [
        'leave_id',
        'policy',
    ];
}
