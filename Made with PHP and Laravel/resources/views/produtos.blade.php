<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
      *{
         margin: 0;
          padding: 0;
      }

      strong{
          font-size: 20px;
      }

      #place-button{
          width: 100%;
          display: flex;
          flex-direction: row;
          justify-content: center;
      }

      a{
          border: 1px solid #000;
          border-radius: 4px;
          margin-top: 35px;
          text-decoration: none;
          color: #000;
          width: 100px;
          height: 30px;
          background-color: #f1f1f1;
          text-align: center;
          display: flex;
          flex-direction: column;
          justify-content: center;
      }
   </style>
	<title>Produtos</title>
</head>
<body>
	<div class="container">
        <h1>Produtos da categoria {{ $categoria->categoria }} CAT_ID {{ $categoria->id }}</h1>
        @if($num_rows == 0)
            <div class="prod"><strong>Nenhum produto cadastrado!</strong></div>
        @else
            @foreach($produtos as $prod)
                <div class="prod"><strong>Produto: {{ $prod->produto }}</strong><br>Id: {{ $prod->id }}<br>Categoria: {{ $prod->CAT_ID }}<br>
                    <form method="POST" action="{{ route('SiteController.excluiProd', $prod->id) }}">
                        @csrf
                        @method('DELETE')
                        <button style="margin: 5px; padding: 2px;" type="submit">Excluir</button>
                    </form>
                    <hr>
                </div>
            @endforeach
        @endif
        <div id="place-button">
           <a href="{{ route('SiteController.categorias') }}">Voltar</a>
        </div>
    </div>
</body>
</html>