<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="default/imgs/database-favicon.png">
    <link rel="stylesheet" href="index/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="default/fontawesome/css/all.min.css">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container-fluid" id="img-place">
        <p id="title" class="font-effect-fire">Controle de Estoque</p>
    </div>
    <div class="navbar-fixed">
        <!-- <span class="animationBar"></span> -->
        <nav class="navbar navbar-expand-lg" id="menuBar">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-success" href="{{ route('index') }}" id="homepage"><i class="fa-solid fa-database"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="#" id="salePage">Vendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="{{ route('ClientController.listClientes') }}" id="clientPage">Clientes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" id="listas">Listas</a>
                            <ul class="dropdown-menu border border-success">
                                <li><a class="item dropdown-item text-success" href="{{ route('CatController.listCategorias') }}">Categorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('SubcatController.listSubcategorias') }}">Subcategorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('BrandController.listMarcas') }}" id="listMarcas">Marcas</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('ProdController.listProdutos') }}">Produtos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" id="listas">Registros</a>
                            <ul class="dropdown-menu border border-success" id="dropdown">
                                <li><a class="item dropdown-item text-success" href="{{ route('CatController.regCategorias') }}" id="regCat">Categorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('SubcatController.regSubcategoria') }}" id="regSubcat">Subcategorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('BrandController.regMarcas') }}" id="regMarcas">Marcas</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('ProdController.regProdutos') }}" id="regProd">Produtos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="animationBar"></span> 
    </div>
    
    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>