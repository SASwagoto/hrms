<?php

namespace App\Models;

use App\Models\Position;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];  

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function positions()
    {
        return $this->hasMany(Position::class, 'dept_id');
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'dept_id');
    }

    public function customSoftDelete()
    {
        $this->delete();
        //$this->roles()->detach();
        $this->positions()->delete();
        $this->teams()->delete();
    }
}
