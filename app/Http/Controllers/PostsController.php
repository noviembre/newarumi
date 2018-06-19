<?php

namespace App\Http\Controllers;

use App\Tag;
use Session;
use App\Category;
use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();


        if ($categories->count() == 0 || $tags->count() == 0)
        {
            Session::flash('info','Debe tener por lo menos una categoria y una etiqueta si quiere crear un Post');

            return redirect()->back();

        }

        return view('admin.posts.create')
            ->with('categories',Category::all())
            ->with('tags',$tags);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title' => 'required',
            'featured' => 'required|image',
            'contenido' => 'required',
            'category_id' => 'required',
            'tags' => 'required',


        ]);

        $featured = $request->featured;
        $featured_new_name = 'post_'.time().$featured->getClientOriginalName();

        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([

            'title' => $request->title,
            'contenido' => $request->contenido,
            'featured' => 'uploads/posts/' . $featured_new_name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title)

        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success','El Post fue creado exitosamente!');
        return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Encontrar post que no estan dormidos
        $post = Post::find($id);

        return view('admin.posts.edit')->with('post', $post)
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar
        $this->validate($request,[

            'title' => 'required',
            'contenido' => 'required',
            'category_id' => 'required',
        ]);

        //encontrar post
        $post = Post::find($id);

        //si el usuario cambia de imagen...

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;

            $featured_new_name = 'post_'.time() . $featured->getClientOriginalName();

            $featured->move('uploads/posts',$featured_new_name);

            $post->featured = 'uploads/posts/'.$featured_new_name;

        }

        //Actualizar datos

        $post->title = $request->title;
        $post->contenido = $request->contenido;
        $post->category_id = $request->category_id;

        $post->save();

        // guardar tags editados
        $post->tags()->sync($request->tags);

        Session::flash('success','El Post fue Actualizado exitosamente!');

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success','El Post fue desactivado exitosamente!');

        return redirect()->back();
    }

    public function trashed(){

        //listar solo los post que este dormidos
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts',$posts);

    }

    public function kill($id)
    {
        //
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        Session::flash('success','El Post fue eliminado permanentemente!');

        return redirect()->back();

    }

    public function restore($id)
    {
        //
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success','El Post fue Activado exitosamente!');

        return redirect()->route('posts');

    }
}
