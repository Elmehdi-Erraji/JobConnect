<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'degree',
        'school',
        'city',
        'details',
        'start_date',
        'end_date',
    ];

    protected $dates = ['start_date', 'end_date', 'deleted_at'];
}
