<x-layouts.app :title="__('Editar estabelecimento')" :dark-mode="auth()->user()->pref_dark_mode">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Editar estabelecimentos</h1>

        <form action="{{ route('estabelecimentos.update', $estabelecimento) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome</label>
                <input
                    type="text"
                    name="nome"
                    id="nome"
                    value="{{ old('nome', $estabelecimento->nome) }}"
                    required
                >
                @error('nome') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input
                type = "text"
                    name="cidade"
                    id="cidade"
                    rows="4"
                ></input>
            </div>

            <div class="form-actions">
                <button type="submit">Atualizar</button>
                <a href="{{ route('estabelecimentos.show', $estabelecimento) }}" class="btn gray">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>
