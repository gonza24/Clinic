@extends('theme.backend.layouts.admin')

@section('title', 'Este es el título')

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
    <li><a href="{{ route('backend.role.index') }}">Roles del Sistema</a></li>
    <li>{{ $role->name }}</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Rol: </strong> {{ $role->name }}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Usuarios con el rol de {{ $role->name }}</span>
                            <p><strong>Slug: </strong>{{ $role->slug }}</p>
                            <p><strong>Descripción: </strong>{{ $role->description }}</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('backend.role.edit', $role)}}">EDITAR</a>
                            <a href="#" style="color: red" onclick="enviar_formulario()">ELIMINAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{route('backend.role.destroy', $role)}}" name="delete_form">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('foot')
    <script>
        function enviar_formulario(){
            Swal.fire({
                title: "Desea eliminar este rol?",
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