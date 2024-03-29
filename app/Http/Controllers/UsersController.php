<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Profile;

use Illuminate\Http\Request;

#----------------------------------------------------------------------------
#============= 03 ========== injectar el middleware en el constructor ======
#----------------------------------------------------------------------------

class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('admin');
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email'

        ]);

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('123456')

        ]);

        $profile = Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar_admin.png'
        ]);

        Session::flash('success','El Usuario fue creado exitosamente!');

        return redirect()->route('users');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->profile->delete();

        $user->delete();

        Session::flash('success','el Usuario fue eliminado correctamente');

        return redirect()->back();
    }

    public function admin($id)
    {
        $user = User::find($id);
        $user->admin = 1;

        $user->save();

        Session::flash('success','Los cambios se realizaron con exito');

        return redirect()->back();
    }

    public function not_admin($id)
    {
        $user = User::find($id);
        $user->admin = 0;

        $user->save();

        Session::flash('success','Los cambios se realizaron con exito');

        return redirect()->back();
    }
}
