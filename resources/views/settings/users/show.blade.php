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
                            {{ __($user->name) }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Aqui estão todas as informações do usuário.') }}
                        </p>
                    </header>

                    <ul class="list-none mt-5">
                        <li><strong>Nome: </strong>{{ $user->name }}</li>
                        <li><strong>E-mail: </strong>{{ $user->email }}</li>
                        <li><strong>Permissão: </strong>@if ($user->admin) Administrador @else Usuário comum @endif</li>
                        <li><strong>Criado em: </strong>{{ date('d/m/Y - H\hi', strtotime($user->created_at)) }}</li>
                        <li><strong>Atualizado em: </strong>{{ date('d/m/Y - H\hi', strtotime($user->updated_at)) }}</li>
                    </ul>

                        <a href="{{ route('users.index') }}">
                            <x-secondary-button class="mt-5 mr-2">
                                {{ __('Voltar') }}
                            </x-secondary-button>
                        </a>
    
                        <a href="{{ route('users.edit', $user->id) }}">
                            <x-primary-button class="mt-5 mr-2">
                                {{ __('Editar') }}
                            </x-primary-button>
                        </a>

                        <a href="{{ route('users.delete', $user->id) }}">
                            <x-danger-button class="mt-5">
                                {{ __('Remover') }}
                            </x-danger-button>
                        </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>