<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
#-------------------------------------------------------------------------------------------------
#============= 01 =====  [ crear: php artisan make:controller ProfilesController --resource ]  ===
#-------------------------------------------------------------------------------------------------

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user', Auth::user());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        #---- NO NECESITAMOS EL ID DEL USUARIO, si no el id del usuario logeado

        #---- Validacion
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
        ]);

        #======================================
        #-------- Usuario logeado
        $user = Auth::user();


        #======================================
        #-------- si cambia de imagen

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatar_new_name);
            $user->profile->avatar = 'uploads/avatars/' . $avatar_new_name;

            $user->profile->save();
        }


        #======================================
        #-------- Modificando datos del Usuario
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->facebook = $request->facebook;
        $user->profile->youtube = $request->youtube;
        $user->save();


        #======================================
        #-------- guardando datos en el perfil del Usuario
        $user->profile->save();


        #======================================
        #-------- si el usuario cambia de password
        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
            $user->save();

        }

        Session::flash('success','La cuenta fue actualizada');
        return redirect()->back();
    }


}
