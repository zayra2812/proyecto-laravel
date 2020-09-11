<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie_rental extends Model
{
    protected $table ='movie_rental';
    protected $fillable = ['movie_id', 'rental_id', 'prince', 'observations' ];
    protected $guarded = ['id' ];
}
