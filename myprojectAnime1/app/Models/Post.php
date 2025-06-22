<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model

{

    use HasFactory;
    protected $fillable = [
        'content',
        'country_id',
        'user_id'
    ];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}


