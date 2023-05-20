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
                            {{ __('Novo filme') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Adicione um novo filme.') }}
                        </p>
                    </header>

                    <form method="POST" action="{{ route('movies.store') }}" class="mt-5">
                        @csrf

                        <!-- Título -->
                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Título')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Sinopse -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Sinopse')" />
                            <textarea id="description" class="block mt-1 w-full" name="description" required></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Diretor -->
                        <div class="mt-4">
                            <x-input-label for="director" :value="__('Diretor')" />
                            <x-text-input id="director" class="block mt-1 w-full" type="text" name="director" required />
                            <x-input-error :messages="$errors->get('director')" class="mt-2" />
                        </div>

                        <!-- Ano -->
                        <div class="mt-4">
                            <x-input-label for="year" :value="__('Ano')" />
                            <x-text-input id="year" class="block mt-1 w-full" type="number" name="year" required />
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>

                        <!-- Nota -->
                        <div class="mt-4">
                            <x-input-label for="rate" :value="__('Nota')" />
                            <x-text-input id="rate" class="block mt-1 w-full" type="number" name="rate" required />
                            <x-input-error :messages="$errors->get('rate')" class="mt-2" />
                        </div>

                        <!-- Gênero -->
                        <div class="mt-4">
                            <x-input-label for="genre" :value="__('Gênero')" />
                            <select name="genre_id" id="genre">
                                @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('genre_id')" class="mt-2" />
                        </div>

                        <a href="{{ route('movies.index') }}">
                            <x-secondary-button class="mt-5 mr-2">
                                {{ __('Cancelar') }}
                            </x-secondary-button>
                        </a>

                        <x-primary-button class="mt-5">
                            {{ __('Criar') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>