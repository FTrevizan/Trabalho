
<x-layouts.app :title="__('Minhas categorias')">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <div class="header">
            <h1>Minhas categorias</h1>
            <a href="{{ route('categorias.create') }}" class="btn">+ Nova categoria</a>
        </div>

        @if ($categorias->isEmpty())
            <p>Nenhuma categoria cadastrada.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>total</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nome }}</td>
                            <td>
                                {{ $categoria->total }}
                            </td>
                            <td>
                                <a href="{{ route('categorias.show', $categoria) }}" class="link blue">Ver</a>
                                <a href="{{ route('categorias.edit', $categoria) }}" class="link yellow">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="button"
                                        class="btn-excluir link red"
                                        data-nome="{{ $categoria->nome }}">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>


