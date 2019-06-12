<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme.backend.pages.user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.backend.pages.user.create', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, User $user)
    {
        $user->store($request);
        return redirect()->route('backend.user.show', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('theme.backend.pages.user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('theme.backend.pages.user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->my_update($request);
        return redirect()->route('backend.user.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        alert('Éxito', 'Usuario eliminado', 'success');
        return redirect()->route('backend.user.index');
    }

    /**
     * Mostrar formulario para la asignación de roles
     *
     */
    public function assign_role(User $user)
    {
        return view('theme.backend.pages.user.assign_role', [
           'user' => $user,
           'roles' => Role::all()
        ]);
    }

    /**
     * Asignar roles en tabla pivote de la BD
     *
     */
    public function role_assignment(Request $request, User $user)
    {
        $user->role_assignment($request);
        return redirect()->route('backend.user.show', $user);
    }

    /**
     * Mostrar formulario para la asignación de roles
     *
     */
    public function assign_permission(User $user)
    {
        return view('theme.backend.pages.user.assign_permission', [
            'user' => $user,
            'roles' => $user->roles
        ]);
    }

    /**
     * Asignar permisos en la tabla pivote de la BD
     *
     */
    public function permission_assignment(Request $request, User $user)
    {
        $user->permissions()->sync($request->permissions);
        alert('Exiro', 'Permisos asignados', 'success');
        return redirect()->route('backend.user.show', $user);
    }
}
