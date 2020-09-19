<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');      //  Ejecuta el auth para cualquier metodo del controller que se quiera ejecutar
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('manage-users')){
            return redirect(route('admin.home'));
        }

        $roles = Role::all();
        $users = User::all();   // Traigo todos los usuarios
        return view('admin.users', ['title' => 'Usuarios', 'currentUser' => Auth::user()])
        ->with(['users' => $users,
                'roles' => $roles]); // Retorno la vista con la varible $users y $roles cargada
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $currentRol = Role::all()->where('id', $user->id);
        $roles = Role::all();
        return view('admin.profile', ['title' => $user->name, 'currentUser' => Auth::user()])
        ->with(['user' => $user,
                'currentRol' => $currentRol,
                'roles' => $roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $currentRol = Role::all()->where('id', $user->id);
        $roles = Role::all();
        return view('admin.edit-profile', ['title' =>$user->name, 'currentUser' => Auth::user()])
        ->with(['user' => $user,
                'currentRol' => $currentRol,
                'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);      // Con sync vinculo los roles del usuario con el ARREGLO de roles que traigo del formulario
        
        $user->name = $request->name;
        $user->phoneline = $request->phoneline;
        $user->save();
        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();  // Elimina la relacion con role_user
        $user->delete();
        return redirect()->route('admin.users');
    }
}
