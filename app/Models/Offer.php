<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'domain', 'local', 'salary', 'description','created_by'];

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

