<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class,'sector_id');
    }

    public function leader()
    {
        return $this->belongsTo(User::class,'leader_id');
    }
}
