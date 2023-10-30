<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leave extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    // Relationship with leave requests
    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class, 'leave_id');
    }

    // Relationship with leave balances
    public function leaveBalances()
    {
        return $this->hasMany(LeaveBalance::class, 'leave_id');
    }

    // Relationship with leave policies
    public function leavePolicy()
    {
        return $this->hasOne(LeavePolicy::class, 'leave_id');
    }

}
