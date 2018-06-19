<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


#---------------------------------------------------------
#============= 03
#---------------------------------------------------------
class Post extends Model
{

    use SoftDeletes;

    protected $fillable = [

        'title', 'contenido', 'category_id','featured', 'slug'

    ];

    #===== function to show images starts =========
    public function getFeaturedAttribute($featured)
    {
        return asset($featured);

    }
    #===== function to show images ends =========


    // un post solo puede pertenecer a una sola categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $dates  = ['deleted_at'];


    public function tags()
    {
        //Tag  pertenece a muchas categorias
        return $this->belongsToMany(Tag::class);

    }


}
