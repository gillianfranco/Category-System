<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="default/imgs/database-favicon.png">
    <link rel="stylesheet" href="default/regBase/style.css">
    @yield('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="default/fontawesome/css/all.min.css">
    <title>Sistema de Categorias</title>
</head>
<body>
    <div class="container-fluid" id="img-place">
        <p id="title" class="font-effect-fire">@yield('title')</p>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border border-top border-success" id="menuBar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('index') }}" id="homepage"><i class="fa-solid fa-database"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-success " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" id="listas">Listas</a>
                        <ul class="dropdown-menu border border-success" id="dropdown">
                            <li><a class="dropdown-item text-success" href="#">Categorias</a></li>
                            <li><a class="dropdown-item text-success" href="#">Subcategorias</a></li>
                            <li><a class="dropdown-item text-success" href="#">Produtos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success font-effect-fire" href="{{ route('CatController.regCategorias') }}" id="regCat">Registro de Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success font-effect-fire" href="{{ route('SubcatController.regSubcategoria') }}" id="regSubcat">Registro de Subcategorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success font-effect-fire" href="{{ route('SubcatController.regProdutos') }}" id="regProd">Registro de Produtos</a>
                    </li>
                    <form class="d-flex position-absolute end-0 me-2" id="searchBar" role="search" action="" method="">
                        <input class="form-control me-2 border border-success btn btn-outline-none" type="search" aria-label="Pesquisar" placeholder="Pesquisar">
                        <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="border border-bottom border-success"></nav>
    @yield('content_base')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>