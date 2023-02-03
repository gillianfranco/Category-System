<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index/style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<title>Registro de Produtos</title>
</head>
<body>
	<div class="container">
        <form action="{{ route('SiteController.cadProd') }}" method="post">
            @csrf
            <div class="box">
                <h1>Registro de Produtos</h1>
                <div class="campo">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto" id="produto" placeholder="Digite o nome do produto" required>
                </div>

                <div class="campo">
                    <label for="CAT_ID">Categoria</label>
                    <select name="CAT_ID" id="CAT_ID"  required>
                        <option value="" disabled selected>--- Selecione ---</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="campo">
                    <label for="SUBCAT_ID">Subcategoria</label>
                    <select name="SUBCAT_ID" id="SUBCAT_ID"  required>
                        <option value="" disabled selected>--- Selecione ---</option>
                        @foreach($subcategorias as $subcategoria)
                            <option value="{{ $subcategoria->id }}">{{ $subcategoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="buttons">
                    <a href="{{ route('SiteController.cadCat_View') }}">Criar novas Categorias</a>
                    <a href="{{ route('SiteController.cadSubcat_View') }}">Criar novas Subcategorias</a>
                    <a href="{{ route('SiteController.categorias') }}">Visualizar</a>
                    <button type="submit" style="cursor: pointer;">Registrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>