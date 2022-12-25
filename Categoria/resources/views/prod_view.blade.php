@extends('default.defaultHTML')
@section('title', 'Categorias')
@section('content')
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		h1{
			margin: 20px 0 20px 0;
		}

		div.container{
			width: 100%;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		div.categorias{
			width: 150px;
			height: 35px;
			padding: 5px 0 5px 0;
			text-align: center;
			vertical-align: center;
			background-color: #000;
			margin: 5px 0 5px 0;
		}

		div.categorias a{
			text-decoration: none;
			color: #fff;
			font-size: 25px;
		}

		#place-button{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        a{
            text-decoration: none;
            color: #000;
        }

		a#btn-voltar{
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
	<div class="container">
		<h1>Categorias</h1>
		@foreach($categorias as $cat)
		<div class="categorias"><a href="{{ route('SiteController.prod', $cat->id) }}">{{ $cat->categoria }}</a></div>
		@endforeach
		<div id="place-button">
            <a id="btn-voltar" href="{{ route('SiteController.category_view') }}">Voltar</a>
        </div>
	</div>
	
@endsection