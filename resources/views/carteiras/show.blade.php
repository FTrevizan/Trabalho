<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>{{ $carteira->nome }}</h1>

        @if ($carteira->saldo)
            <p>{{ $carteira->saldo }}</p>
            @if ($carteira->imagem)
            <p>{{ $carteira->Imagem }}</p>
        @endif

        <div class="form-actions">
            <a href="{{ route('carteiras.edit', $carteira) }}" class="btn yellow">Editar</a>
            <a href="{{ route('carteiras.index') }}" class="btn gray">Voltar</a>
        </div>
    </div>
</x-layouts.app>
