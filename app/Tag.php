<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

#---------------------------------------------------------
#============= 01 ==========  [ B ]  =====================
#---------------------------------------------------------

class Tag extends Model
{
    protected $fillable = [

        'tag'

    ];

    public function posts(){

        // un Tag pertenece a muchos post
        return $this->belongsToMany(Post::class);
    }

}
