<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cadSubcat_View/style.css">
	<title>Registro de Subcategorias</title>
</head>
<body>
	<div class="container">
        <form action="{{ route('SiteController.cadSubcat') }}" method="post">
            @csrf
            <div class="box">
                <h1>Registro de Subcategorias</h1>
                <div class="campo">
                    <label for="nome">Subcategoria</label>
                    <input type="text" name="subcategoria" id="subcategoria" placeholder="Digite o nome da nova subcategoria" required>
                </div>
                <div class="campo">
                    <label for="CAT_ID">Subcategoria</label>
                    <select name="CAT_ID" id="CAT_ID" required>
                        <option value="" disabled selected>--- Selecione ---</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="buttons">
                    <a href="{{ route('SiteController.index') }}">Voltar</a>
                    <button type="submit" style="cursor: pointer;">Criar nova subcategoria</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>