<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

#---------------------------------------------------------
#============= 06 ==========  [ Creando Profile ]  =======
#---------------------------------------------------------

class Profile extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }

    protected $fillable = ['user_id','avatar', 'youtube', 'facebook','about'];

}
