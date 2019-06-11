@extends('theme.backend.layouts.admin')

@section('title', 'Asignar Permisos')

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
    <li><a href="{{ route('backend.user.index') }}">Usuarios del Sistema</a></li>
    <li><a href="{{ route('backend.user.show', $user) }}">{{ $user->name }}</a></li>
    <li>Asignar permisos</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption">Selecciona los permisos que deseas asignar</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Asignar permisos</span>
                            <div class="row">
                                <form class="col s12" method="POST" action="{{ route('backend.user.permission_assignment', $user) }}">

                                    @csrf
                                    {{-- Permisos del por roles del usuario --}}
                                    @foreach ($roles as $role)
                                        <p>{{ $role->name }}</p>
                                        @foreach ($role->permissions as $permission)
                                            <p>
                                                <input type="checkbox" id="{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}" @if($user->has_permission($permission->id)) checked @endif>
                                                <label for="{{ $permission->id }}">
                                                    <span>{{ $permission->name }}</span>
                                                </label>
                                            </p>
                                        @endforeach
                                    @endforeach

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit">Guardar
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    @include('theme.backend.pages.user.includes.user_nav')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
@endsection