<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts.base\style.css">
    @yield('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Sistema de Categorias</title>
</head>
<body>
    <div class="container-fluid" id="img-place">
        <div id="title-place">@yield('title')</div>
        <img src="layouts.base/imgs/Above-the-fold.png" alt="Imagem de apresentação" class="img-fluid">
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border border-top border-success" id="menuBar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" id="Homepage">Homepage</a>
                        <ul class="dropdown-menu border border-success" id="dropdown">
                            <li><a class="dropdown-item text-success" href="#">Categorias</a></li>
                            <li><a class="dropdown-item text-success" href="#">Subcategorias</a></li>
                            <li><a class="dropdown-item text-success" href="#">Produtos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#" id="cadCat">Cadastro de Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#" id="cadSubcat">Cadastro de Subcategorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#" id="cadProd">Cadastro de Produtos</a>
                    </li>
                    <form class="d-flex position-absolute end-0 me-2" id="searchBar" role="search" action="" method="">
                        <input class="form-control me-2 border border-success btn btn-outline-none" type="search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="border border-bottom border-success"></nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>