<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configurações') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __($movie->title) }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Aqui estão todas as informações do filme.') }}
                    </p>
                </header>

                <ul class="list-none mt-5">
                    <li><strong>Título: </strong>{{ $movie->title }}</li>
                    <li><strong>Sinopse: </strong>{{ $movie->description }}</li>
                    <li><strong>Diretor: </strong>{{ $movie->director }}</li>
                    <li><strong>Ano: </strong>{{ $movie->year }}</li>
                    <li><strong>Nota: </strong>{{ $movie->rate }}</li>
                    <li><strong>Gênero: </strong>{{ $movie->genre->name }}</li>
                    <li><strong>Criado em: </strong>{{ $movie->created_at }}</li>
                    <li><strong>Atualizado em: </strong>{{ $movie->updated_at }}</li>
                </ul>

                <a href="{{ route('movies.index') }}">
                    <x-secondary-button class="mt-5 mr-2">
                        {{ __('Voltar') }}
                    </x-secondary-button>
                </a>

                <a href="{{ route('movies.edit', $movie->id) }}">
                    <x-primary-button class="mt-5 mr-2">
                        {{ __('Editar') }}
                    </x-primary-button>
                </a>

                <a href="{{ route('movies.delete', $movie->id) }}">
                    <x-danger-button class="mt-5">
                        {{ __('Remover') }}
                    </x-danger-button>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>