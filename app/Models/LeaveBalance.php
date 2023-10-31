<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveBalance extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'leave_balance';

    protected $fillable = [
        'user_id',
        'leave_id',
        'current_balance',
        // Add other fillable fields here if needed
    ];
    
}
