<?php

namespace App\Models;

use App\Models\Position;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];  

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
