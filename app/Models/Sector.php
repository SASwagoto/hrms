<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'sector_leader');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'sector_has_teams', 'sector_id', 'team_id');
    }
}
