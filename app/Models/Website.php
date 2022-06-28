<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Website extends Model
{
    use HasFactory;

    protected $table = "websites";

    protected $fillable = [
        'name',
        'url'
    ];

    //one to many relationship
    //websites has many posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
