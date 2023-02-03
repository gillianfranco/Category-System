<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cadCat_View/style.css">
	<title>Registro de Categorias</title>
</head>
<body>
	<div class="container">
        <form action="{{ route('SiteController.cadCat'); }}" method="post">
            @csrf
            <div class="box">
                <h1>Registro de Categorias</h1>
                <div class="campo">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome da nova categoria" required>
                </div>

                <div class="buttons">
                    <a href="{{ route('SiteController.index') }}">Voltar</a>
                    <button type="submit" style="cursor: pointer;">Criar nova categoria</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>