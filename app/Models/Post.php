<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {

        //relationships 
        return $this->belongsTo(User::class);
        
        
    }

    //website relation
    public function website(){
        return $this->belongsTo(Website::class);
    }
}
