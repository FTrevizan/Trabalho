
<x-layouts.app :title="__('Minha carteiras')">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <div class="header">
            <h1>Minha Carteiras</h1>
            <a href="{{ route('carteiras.create') }}" class="btn">+ Nova Carteira</a>
        </div>

        @if ($carteiras->isEmpty())
            <p>Nenhuma carteira cadastrada.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Saldo</th>
                        <th>Imagem</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($carteiras as $carteira)
                        <tr>
                            <td>{{ $carteira->nome }}</td>
                            <td>
                                {{ $carteira->Saldo }}
                            </td>
                            <td>
                                <a href="{{ route('carteiras.show', $carteira) }}" class="link blue">Ver</a>
                                <a href="{{ route('carteiras.edit', $carteira) }}" class="link yellow">Editar</a>
                                <form action="{{ route('carteiras.destroy', $carteira) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="button"
                                        class="btn-excluir link red"
                                        data-nome="{{ $carteira->nome }}">
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


