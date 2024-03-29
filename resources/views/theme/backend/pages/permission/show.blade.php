@extends('theme.backend.layouts.admin')

@section('title', $permission->name)

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
    <li><a href="{{ route('backend.role.index') }}">Roles del sistema</a></li>
    <li><a href="{{ route('backend.role.show', $permission->role) }}">Rol: {{ $permission->role->name }}</a></li>
    <li>{{ $permission->name }}</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Permiso: </strong> {{ $permission->name }}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $permission->name }}</span>
                            <p><strong>Slug: </strong>{{ $permission->slug }}</p>
                            <p><strong>Descripción: </strong>{{ $permission->description }}</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('backend.permission.edit', $permission)}}">EDITAR</a>
                            <a href="#" style="color: red" onclick="enviar_formulario()">ELIMINAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{route('backend.permission.destroy', $permission)}}" name="delete_form">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('foot')
    <script>
        function enviar_formulario(){
            Swal.fire({
                title: "Desea eliminar este permiso?",
                text: "Esta acción no se puede deshacer",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, continuar",
                cancelButtonText: "No, cancelar"
            }).then((result) => {
                if(result.value) {
                    document.delete_form.submit();
                }else{
                    swal.fire(
                        'Operación cancelada',
                        'Registro no eliminado',
                        'error'
                    )
                }
            });
        }
    </script>
@endsection