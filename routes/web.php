<?php

Route::get('/test', function (){

    # PREVIAMENTE: crea un par de categorias y un post
    # ejemplo 1: devolver todos los post cuya categoria sea = 1
    #return App\Category::find(1)->posts;
    # ejemplo 2: devolver todas las categorias cuyo post sea = 1
    //return App\Post::find(1)->category;

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


#===============================================
#===================== G R U P O ===============
Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function (){


    Route::get('/home', [

        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);


    #=========================================================
    #------------ P  O  S  T  S ------------------------------
    #=========================================================


    #============================
    #-------- C R E A R ---------
    Route::get('post/create', [

        'uses' => 'PostsController@create',
        'as' => 'post.create'

    ]);

    #============================
    #-------- G U A R D A R -----
    Route::post('post/store', [

        'uses' => 'PostsController@store',
        'as' => 'post.store'

    ]);

    #============================
    #------- L I S T A R --------
    Route::get('/posts',[

        'uses' => 'PostsController@index',
        'as' => 'posts'

    ]);

    #============================
    #------- D O R M I R --------
    Route::get('/post/delete/{id}', [

        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);

    #============================
    #-- L I S T A R --Trashed----
    Route::get('/posts/trashed', [

        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'
    ]);

    #============================
    #------ E L I M I N A R -----
    Route::get('/posts/kill/{id}', [

        'uses' => 'PostsController@kill',
        'as' => 'posts.kill'
    ]);

    #============================
    #------- A C T I V A R ------
    Route::get('/posts/restore/{id}', [

        'uses' => 'PostsController@restore',
        'as' => 'posts.restore'
    ]);

    #============================
    #------- E D I T A R --------
    Route::get('/posts/edit/{id}',[

        'uses' => 'PostsController@edit',
        'as' => 'post.edit'

    ]);

    #============================
    #--- A C T U A L I Z A R ----
    Route::post('/posts/update/{id}',[

        'uses' => 'PostsController@update',
        'as' => 'post.update'

    ]);


















    #=====================================================
    #-------- C A T E G O R I A S ------------------------
    #=====================================================




    #============================
    #-------- C R E A R ---------
    Route::get('/category/create',[

        'uses' => 'CategoriesController@create',
        'as' => 'category.create'

    ]);

    #============================
    #-------- G U A R D A R -----
    Route::post('/category/store',[

        'uses' => 'CategoriesController@store',
        'as' => 'category.store'

    ]);


    #============================
    #------- L I S T A R --------
    Route::get('/categories',[

        'uses' => 'CategoriesController@index',
        'as' => 'categories'

    ]);

    #============================
    #------- E D I T A R --------
    Route::get('/category/edit/{id}',[
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    #============================
    #--- A C T U A L I Z A R ----
    Route::post('/category/update/{id}',[
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);

    #============================
    #------ E L I M I N A R -----
    Route::get('/category/delete/{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);



    #=========================================================
    #------------ T  A  G  S ---------------------------------
    #=========================================================

    #============================
    #------- L I S T A R --------
    Route::get('/tags',[

        'uses' => 'TagsController@index',
        'as' => 'tags'

    ]);

    #============================
    #-------- C R E A R ---------
    Route::get('/tag/create',[

        'uses' => 'TagsController@create',
        'as' => 'tag.create'

    ]);

    #============================
    #-------- G U A R D A R -----
    Route::post('/tag/store',[

        'uses' => 'TagsController@store',
        'as' => 'tag.store'

    ]);

    #============================
    #------- E D I T A R --------
    Route::get('/tag/edit/{id}',[

        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'

    ]);

    #============================
    #--- A C T U A L I Z A R ----
    Route::post('/tag/update/{id}',[

        'uses' => 'TagsController@update',
        'as' => 'tag.update'

    ]);

    #============================
    #------ E L I M I N A R -----
    Route::get('/tag/delete/{id}',[

        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'

    ]);




    #=========================================================
    #------------ U  S  E  R  S ------------------------------
    #=========================================================

    #============================
    #------- L I S T A R --------
    Route::get('/users',[

        'uses' => 'UsersController@index',
        'as' => 'users'

    ]);

    #============================
    #-------- C R E A R ---------
    Route::get('/user/create',[

        'uses' => 'UsersController@create',
        'as' => 'user.create'

    ]);

    #============================
    #-------- G U A R D A R -----
    Route::post('/user/store',[

        'uses' => 'UsersController@store',
        'as' => 'user.store'

    ]);

    #============================
    #------ E L I M I N A R -----
    Route::get('/user/delete/{id}',[

        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'

    ]);


    #============================
    #----- CONCEDER PERMISOS ----
    Route::get('/user/admin/{id}',[

        'uses' => 'UsersController@admin',
        'as' => 'user.admin'

    ]);

    #============================
    #----- RETIRAR PERMISOS -----
    Route::get('/user/not-admin/{id}',[

        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'

    ]);




    #=========================================================
    #----------------- P  R  O  F  I  L  E -------------------
    #=========================================================

    #============================
    #------- E D I T A R --------
    Route::get('/user/profile',[

        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'

    ]);

    #============================
    #--- A C T U A L I Z A R ----
    Route::post('/user/profile/update',[

        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'

    ]);

});

