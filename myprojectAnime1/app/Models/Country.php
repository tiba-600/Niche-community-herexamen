<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $fillable = ['name', 'description', 'intro', 'activations', 'days', 'img'];

    public function posts()
    {

        return $this->hasMany(Post::class);
    }
}
