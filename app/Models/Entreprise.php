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

   

    public function users()
{
    return $this->belongsToMany(User::class, 'entreprise_user', 'entreprise_id', 'user_id')
        ->withPivot('role_id');
}


public function Recrut()
{
    return $this->belongsToMany(User::class, 'entreprise_user', 'entreprise_id', 'user_id')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id');
}

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function entrepriseRepre()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Recrute()
    {
        return $this->belongsToMany(User::class, 'entreprise_user', 'entreprise_id', 'user_id')
            ->whereHas('roles', function ($query) {
                $query->where('id', 3);
            });
        }
}
