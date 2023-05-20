<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-10">
            @foreach ($movies as $movie)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2><b>{{ $movie->title }}</b></h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        {{ $movie->description }}
                    </p>
                    <p><strong>Diretor: </strong>{{ $movie->director }}</p>
                    <p><strong>Ano: </strong>{{ $movie->year }}</p>
                    <p><strong>Nota: </strong>{{ $movie->rate }}</p>
                    <p><strong>Gênero: </strong>{{ $movie->genre->name }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>