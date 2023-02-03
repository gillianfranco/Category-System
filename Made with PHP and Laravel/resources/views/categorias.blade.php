<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="categorias/style.css">
	<title>Lista de Categorias</title>
</head>
<body>
	<div class="container">
		<h1>Clique nas categorias para ver seus respectivos produtos</h1>
		@if($num_rows == 0)
			<h2>Nenhuma categoria registrada!</h2>
		@else
			@foreach($categorias as $categoria)
				<div class="categorias"><a href="{{ route('SiteController.produtos', $categoria->id) }}">{{ $categoria->nome }}</a></div>
			@endforeach
		@endif
		<div id="place-button">
            <a id="btn-voltar" href="{{ route('SiteController.index') }}">Voltar</a>
        </div>
	</div>
</body>
</html>