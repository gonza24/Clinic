@extends('theme.backend.layouts.admin')

@section('title', 'Permisos del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
            <li><a href="{{ route('backend.permission.index') }}">Permisos del Sistema</a></li>
@endsection

@section('dropdown_settings')
    {{-- <li><a href="" class="grey-text text-darken-2"></a></li> --}}
    <li><a href="{{ route('backend.permission.create') }}" class="grey-text text-darken-2">Crear permiso</a></li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Permisos del sistema</strong></p>
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
                                    <th>Slug</th>
                                    <th>Descripción</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td><a href="{{ route('backend.permission.show', $permission) }}">{{ $permission->name }}</a></td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>{{ $permission->description }}</td>
                                        <td><a href="{{ route('backend.role.show', $permission->role->id) }}">{{ $permission->role->name }}</a></td>
                                        <td><a href="{{ route('backend.permission.edit', $permission) }}">Editar</a></td>
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