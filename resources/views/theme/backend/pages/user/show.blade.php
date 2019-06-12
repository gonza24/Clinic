@extends('theme.backend.layouts.admin')

@section('title', $user->name)

@section('head')
@endsection

@section('breadcrumbs')
    {{-- <li><a href=""></a></li> --}}
    <li><a href="{{ route('backend.user.index') }}">Usuarios del Sistema</a></li>
    <li>{{ $user->name }}</li>
@endsection

@section('dropdown_settings')
    {{-- <li><a href="" class="grey-text text-darken-2"></a></li> --}}
    <li><a href="{{ route('backend.user.edit', $user) }}" class="grey-text text-darken-2">Editar usuario</a></li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Usuario: </strong> {{ $user->name }}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $user->name }}</span>
                            <p><strong>Edad: </strong>{{ $user->age() }}</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route('backend.user.edit', $user)}}">EDITAR</a>
                            <a href="#" style="color: red" onclick="enviar_formulario()">ELIMINAR</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    @include('theme.backend.pages.user.includes.user_nav')
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{route('backend.user.destroy', $user)}}" name="delete_form">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('foot')
    <script>
        function enviar_formulario(){
            Swal.fire({
                title: "Desea eliminar este usuario?",
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