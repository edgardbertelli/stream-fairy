<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configurações') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __($movie->title) }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Edite as informações do filme.') }}
                        </p>
                    </header>

                    <form method="POST" action="{{ route('movies.update', $movie->id) }}" class="mt-5">
                        @method('PUT')

                        <!-- Título -->
                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Título')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $movie->title }}" required />
                        </div>

                        <!-- Sinopse -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Sinopse')" />
                            <textarea id="description" class="block mt-1 w-full" name="description" required>
                            {{ $movie->description }}
                            </textarea>
                        </div>

                        <!-- Diretor -->
                        <div class="mt-4">
                            <x-input-label for="director" :value="__('Diretor')" />
                            <x-text-input id="director" class="block mt-1 w-full" type="text" name="director" value="{{ $movie->director }}" required />
                        </div>

                        <!-- Ano -->
                        <div class="mt-4">
                            <x-input-label for="year" :value="__('Ano')" />
                            <x-text-input id="year" class="block mt-1 w-full" type="number" name="year" value="{{ $movie->year }}" required />
                        </div>

                        <!-- Nota -->
                        <div class="mt-4">
                            <x-input-label for="rate" :value="__('Nota')" />
                            <x-text-input id="rate" class="block mt-1 w-full" type="number" name="rate" value="{{ $movie->rate }}" required />
                        </div>

                        <!-- Gênero -->
                        <div class="mt-4">
                            <x-input-label for="genre" :value="__('Gênero')" />
                            <select name="genre_id" id="genre">
                                @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}" @if ($movie->genre->id == $genre->id) selected @endif>{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <a href="{{ route('movies.show', $movie->id) }}">
                            <x-secondary-button class="mt-5 mr-2">
                                {{ __('Cancelar') }}
                            </x-secondary-button>
                        </a>

                        <x-primary-button class="mt-5">
                            {{ __('Salvar') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>