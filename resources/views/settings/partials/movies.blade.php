<section>

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Filmes') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Liste, crie, edite ou remova filmes.") }}
        </p>
    </header>

    <a href="{{ route('movies.index') }}">
        <x-secondary-button class="mt-3">
            {{ __('Gerenciar filmes') }}
        </x-secondary-button>
    </a>

    </div>
</section>