<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationLevel extends Model
{
    use SoftDeletes;

    protected $fillable = ['name']; 

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    // public function offers()
    // {
    //     return $this->hasMany(Offer::class);
    // }
}
