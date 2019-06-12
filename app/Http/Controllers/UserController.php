<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('index', User::class);
        return view('theme.backend.pages.user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('create', User::class);
        return view('theme.backend.pages.user.create', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, User $user)
    {
        $user = $user->store($request);
        return redirect()->route('backend.user.show', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('theme.backend.pages.user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('theme.backend.pages.user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param User $user
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
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
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
        $this->authorize('assign_role', $user);
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
        $this->authorize('assign_role', $user);
        $user->role_assignment($request);
        return redirect()->route('backend.user.show', $user);
    }

    /**
     * Mostrar formulario para la asignación de roles
     *
     */
    public function assign_permission(User $user)
    {
        $this->authorize('assign_permission', $user);
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
        $this->authorize('assign_permission', $user);
        $user->permissions()->sync($request->permissions);
        alert('Exiro', 'Permisos asignados', 'success');
        return redirect()->route('backend.user.show', $user);
    }

    public function profile()
    {
        return view('theme.frontend.pages.user.profile');
    }
}
