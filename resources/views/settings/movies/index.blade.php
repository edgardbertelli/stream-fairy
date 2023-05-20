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
                        {{ __('Filmes') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Liste, crie, edite ou remova filmes.') }}
                    </p>

                    <a href="{{ route('movies.create') }}">
                    <x-secondary-button class="mt-5 mr-2">
                        {{ __('Novo filme') }}
                    </x-secondary-button>
                    </a>
                </header>

                <table class="table-auto mt-5 border-separate border-spacing-2">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Diretor</th>
                            <th>Ano</th>
                            <th>Nota</th>
                            <th>Criado em</th>
                            <th>Atualizado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr>
                            <td><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></td>
                            <td>
                                <p class="text-sm">
                                    {{ $movie->description }}
                                </p>
                            </td>
                            <td>{{ $movie->director }}</td>
                            <td>{{ $movie->year }}</td>
                            <td>{{ $movie->rate }}</td>
                            <td>{{ date('d/m/Y - H\hi', strtotime($movie->created_at)) }}</td>
                            <td>{{ date('d/m/Y - H\hi', strtotime($movie->updated_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>