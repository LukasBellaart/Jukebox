<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $playlist->name }} - {{ $duration }} 
        </h2>
    </x-slot>

    @foreach ($playlist->songs as $song)
        <div onclick="window.location.href='/song/{{ $song->id }}'" class="pt-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $song->name }}
                    </div>
                </div>
            </div>
        </div>         
    @endforeach

    
</x-app-layout>
