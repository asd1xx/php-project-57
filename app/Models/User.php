<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * Properties.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Hidden properties.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Properties.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get all tasks with the created by id.
     */
    public function createdTasks()
    {
        return $this->hasMany(Task::class, 'created_by_id');
    }

    public function assignedTasks()
    {
        return $this->hasMany(Task::class, 'assigned_to_id');
    }
}
