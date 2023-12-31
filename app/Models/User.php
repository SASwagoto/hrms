<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function emp()
    {
        return $this->hasOne(Employee::class, 'user_id');
    }

    public static function getEmployees()
    {
        return self::role('employee')->get();
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_has_members', 'user_id', 'team_id');
    }

    public function workShifts()
    {
        return $this->belongsToMany(WorkShift::class, 'work_shift_has_users');
    }

    public function customSoftDelete()
    {
        $this->delete();
        //$this->roles()->detach();
        $this->emp()->delete();
        $this->educations()->delete();
    }

    
}
