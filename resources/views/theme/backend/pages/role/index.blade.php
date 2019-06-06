@extends('theme.backend.layouts.admin')

@section('title', 'Roles del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
    <li><a href="{{ route('backend.role.index') }}">Roles del Sistema</a></li>
@endsection

@section('dropdown_settings')
    {{-- <li><a href="" class="grey-text text-darken-2"></a></li> --}}
    <li><a href="{{ route('backend.role.create') }}" class="grey-text text-darken-2">Crear rol</a></li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Roles del sistema</strong></p>
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
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td><a href="{{ route('backend.role.show', $role) }}">{{ $role->name }}</a></td>
                                            <td>{{ $role->slug }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td><a href="{{ route('backend.role.edit', $role) }}">Editar</a></td>
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