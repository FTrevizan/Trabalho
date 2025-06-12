<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>{{ $estabelecimento->nome }}</h1>

        @if ($estabelecimento->cidade)
            <p>{{ $estabelecimento->cidade }}</p>
        @endif

        <div class="form-actions">
            <a href="{{ route('estabelecimentos.edit', $estabelecimento) }}" class="btn yellow">Editar</a>
            <a href="{{ route('estabelecimentos.index') }}" class="btn gray">Voltar</a>
        </div>
    </div>
</x-layouts.app>
