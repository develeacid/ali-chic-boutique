<x-guest-layout>
    <x-slot name="title">
        {{ $user->name ?? 'Usuario' }}
    </x-slot>

    <!-- Contenido de la vista -->
    <div class="container">
        <h1>{{ $user->name ?? 'Usuario' }}</h1>
        <p>Email: {{ $user->email ?? 'N/A' }}</p>
        <p>Equipo Actual: {{ $user->current_team_id ?? 'N/A' }}</p>
        <p>Foto de Perfil: {{ $user->profile_photo_path ?? 'N/A' }}</p>
        <!-- Agrega más detalles del usuario aquí según tus necesidades -->
    </div>
</x-guest-layout>
