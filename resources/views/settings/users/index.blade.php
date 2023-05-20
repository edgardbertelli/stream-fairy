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
                            {{ __('Usuários') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Liste, crie, edite ou remova usuários.') }}
                        </p>

                        <a href="{{ route('users.create') }}">
                            <x-secondary-button class="mt-5 mr-2">
                                {{ __('Novo usuário') }}
                            </x-secondary-button>
                        </a>
                    </header>

                    <table class="table-auto mt-5 border-separate border-spacing-2">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Criado em</th>
                                <th>Atualizado em</th>
                                <th>Permissão</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            @if ($user->id !== Auth::user()->id)
                            <tr>
                                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date('d/m/Y - H\hi', strtotime($user->created_at)) }}</td>
                                <td>{{ date('d/m/Y - H\hi', strtotime($user->updated_at)) }}</td>
                                <td>{{ $user->admin ? 'Administrador' :  'Usuário comum' }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>