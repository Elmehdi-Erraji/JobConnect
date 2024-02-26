<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Entreprise extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = ['name', 'description', 'status','user_id'];

   

    public function entrepriseRepre()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Recrut()
    {
        return $this->belongsToMany(User::class, 'entreprise_user', 'entreprise_id', 'user_id')
            ->whereHas('roles', function ($query) {
                $query->where('id', 3);
            });
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
