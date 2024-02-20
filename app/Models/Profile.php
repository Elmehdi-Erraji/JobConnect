<?php

namespace App\Models;

use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cv',
        'image',
        'motivation',
        'city',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class)->withTimestamps();
    }

    public function experiences()
    {
        return $this->belongsToMany(Experience::class)->withTimestamps();
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class)->withTimestamps();
    } 
}
