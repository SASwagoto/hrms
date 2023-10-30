<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'leave_request';


    public function user()
    {
        return $this->belongsTo(User::class, 'emp_id');
    }

    public function leave()
    {
        return $this->belongsTo(Leave::class,'leave_id');
    }
}
