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
                            {{ __('Edite as informações do usuário.') }}
                        </p>
                    </header>

                    <form method="POST" action="{{ route('users.update', $user->id) }}" class="mt-5">
                        @method('PUT')

                        <!-- Nome -->
                        <div>
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required />
                        </div>

                        <!-- E-mail -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('E-mail')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
                        </div>

                        <!-- Permissão -->
                        <div class="mt-4">
                            <input type="checkbox" id="admin" name="admin" @if($user->admin) checked @endif>
                            <label for="admin"> Administrador</label><br>
                        </div>

                        <a href="{{ route('users.show', $user->id) }}">
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