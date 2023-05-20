<section>

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Usuários') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Liste, crie, edite ou remova usuários.") }}
        </p>
    </header>

    <a href="{{ route('users.index') }}">
        <x-secondary-button class="mt-3">
            {{ __('Gerenciar usuários') }}
        </x-secondary-button>
    </a>

    </div>
</section>