
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<x-<x-layouts.app>
<body>
    <div class="container">
        <h1>Nova Estabelecimento</h1>
        <form action="{{ route('estabelecimentos.store') }}" method="POST">
        @csrf   
        <!-- Token CSRF para proteção contra ataques CSRF -->
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
                <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('estabelecimentos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
         </div>
    </x-layouts.app>
 </body
 