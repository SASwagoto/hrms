<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'leave_request';

    protected $fillable = [
        'user_id',
        'leave_id',
        'reason',
        'start_date',
        'end_date',
        'days',
        'status',
        'approvedBy',
        'next_approvedBy',
        'approved_at',
        'next_approved_at',
    ];
    


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function leave()
    {
        return $this->belongsTo(Leave::class,'leave_id');
    }
}
