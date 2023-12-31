<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'exam',
        'institute',
        'subject',
        'group',
        'session_year',
        'pass_year',
        'result',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id', 'user_id');
    }
}
