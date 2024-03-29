@extends('theme.backend.layouts.admin')

@section('title', 'Ususarios del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
    <li><a href="{{ route('backend.user.index') }}">Usuarios del sistema</a></li>
@endsection

@section('dropdown_settings')
    {{-- <li><a href="" class="grey-text text-darken-2"></a></li> --}}
    <li><a href="{{ route('backend.user.create') }}" class="grey-text text-darken-2">Crear usuario</a></li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Usuarios del sistema</strong></p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <div class="row">
                            <table>
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="{{ route('backend.user.show', $user) }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->age() }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a href="{{ route('backend.user.edit', $user) }}">Editar</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
@endsection