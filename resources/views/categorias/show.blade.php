<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>{{ $categoria->nome }}</h1>

        @if ($categoria->total)
            <p>{{ $categoria->total }}</p>
        @endif

        <div class="form-actions">
            <a href="{{ route('categorias.edit', $categoria) }}" class="btn yellow">Editar</a>
            <a href="{{ route('categorias.index') }}" class="btn gray">Voltar</a>
        </div>
    </div>
</x-layouts.app>
