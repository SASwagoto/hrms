<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkShift extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'type','start_time','end_time','duration'
    ] ;

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }
    
}
