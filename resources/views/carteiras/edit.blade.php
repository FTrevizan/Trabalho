<x-layouts.app :title="__('Editar carteira')" :dark-mode="auth()->user()->pref_dark_mode">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Editar Carteiras</h1>

        <form action="{{ route('carteiras.update', $carteira) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome</label>
                <input
                    type="text"
                    name="nome"
                    id="nome"
                    value="{{ old('nome', $carteira->nome) }}"
                    required
                >
                @error('nome') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input
                    type="number"
                    name="saldo"
                    id="saldo"
                    rows="4"
                value="{{ $carteira->saldo }}"></input>
            </div>
            
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input
                    type="number"
                    name="imagem"
                    id="imagem"
                    rows="4"
                value="{{ $carteira->imagem }}"></input>
            </div>

            <div class="form-actions">
                <button type="submit">Atualizar</button>
                <a href="{{ route('carteiras.show', $carteira) }}" class="btn gray">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>
