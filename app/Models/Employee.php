<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Education;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class,'position_id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'user_id');
    }

    public function teamLeader()
    {
        return $this->hasOne(Team::class,'leader_id', 'user_id');
    }
    public  function sectorLeader()
    {
        return $this->hasOne(Sector::class,'sector_leader', 'user_id');
    }

    public function team()
    {
        return $this->hasOne(Team::class, 'team_has_members', 'team_has_members.user_id');
    }
}
