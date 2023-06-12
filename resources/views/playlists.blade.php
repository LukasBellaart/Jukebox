<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playlists') }}
        </h2>
    </x-slot>

    @foreach ($playlists as $playlist)
        <div onclick="window.location.href='/playlists/{{ $playlist->id }}'" class="pt-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $playlist->name }}
                    </div>
                </div>
            </div>
        </div>         
    @endforeach
    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('playlistCreate')}}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <input class="dark:bg-gray-800" type="text" name="name" placeholder="Playlist name"><br>
                        <button type="submit">Maak playlist</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
