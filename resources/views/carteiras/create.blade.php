
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<x-<x-layouts.app>
<body>
    <div class="container">
        <h1>Nova Carteira</h1>
        <form action="{{ route('carteiras.store') }}" method="POST" ectype="multipart/form-data">
        @csrf   
        <!-- Token CSRF para proteção contra ataques CSRF -->
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
                <div class="form-group">
                <label for="saldo">Saldo:</label>
                <input type="text" name="saldo">
            </div>
            <div class ="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" name="imagem" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('carteiras.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
         </div>
    </x-layouts.app>
 </body
 