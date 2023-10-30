<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['acc_name', 'acc_type', 'bank_name', 'acc_num'];

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
    public function customSoftDelete()
    {
        $this->delete();
        //$this->roles()->detach();
        $this->incomes()->delete();
        $this->expenses()->delete();
    }
}
