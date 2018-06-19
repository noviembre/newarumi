<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


#---------------------------------------------------------
#============= 04 - Crear migracion
#---------------------------------------------------------
#-- pero para crear esa migracion se tienen que cumplir un par de reglas
#-- 1.- primero que los nombre de las tablas sean en singular: tag, post
#-- 2.- el nombre a crear sera en orden alfabetico.
#-- 3.- entonces el nombre de la migracion a crear seria: php artisan make:migration create_post_tag_table
#-- 4.- por ultimo migrar php artisan migrate

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('post_id');
            $table->integer('tag_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_tag');
    }
}
