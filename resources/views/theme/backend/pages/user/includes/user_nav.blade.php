<div class="collection">
    {{-- <a href="#!" class="collection-item active">Alvin</a> --}}
    <a href="{{ route('backend.user.show', $user) }}" class="collection-item active">{{ $user->name }}</a>
    <a href="{{ route('backend.user.assign_role', $user) }}" class="collection-item">Asignar roles</a>
</div>