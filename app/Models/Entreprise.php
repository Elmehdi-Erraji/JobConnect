<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entreprise extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = ['name', 'description', 'status', 'media'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
