<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function teams($query)
    {
        return $this->hasMany(Team::class);
    }
}
