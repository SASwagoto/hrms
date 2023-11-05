<?php

namespace App\Models;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'position_name',
        'dept_id',
        'isActive',
    ]; 

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function customSoftDelete()
    {
        $this->delete();
        
    }

}
