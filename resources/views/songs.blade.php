<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Songs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table style="width:100%">
                        <colgroup>
                            <col style="width:30%">
                            <col style="width:30%">
                            <col style="width:20%">
                            <col style="width:5%">
                            <col style="width:5%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Genre</th>
                                <th>Add to playlist</th>
                                <th>Delete</th>
                                <th>Play</th>
                            </tr>
                            @foreach ($songs as $song)
                                <tr>
                                    <td >{{ $genre->name }}</td>
                                    <td >{{ $genre->genreid }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
