<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['acc_id', 'source', 'amount', 'date', 'description' ] ;

    public function account()
    {
        return $this->belongsTo(Account::class, 'acc_id');
    }
}
