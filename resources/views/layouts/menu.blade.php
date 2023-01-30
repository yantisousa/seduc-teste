<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<style>
    .search,
    .success {
        position: relative;
        right: 500px;
    }

    .full {
        position: relative;
        width: 500px;
    }

    .logo {
        margin-left: 12%;
    }

    .btn-cadastro {
        margin-right: 10%;
    }

    .entrar {
        margin-right: 20px;
    }

    .icon-menu {
        margin-left: 10%;
    }

    .btn-menu {
        border: none;
    }
    .id-professor {
        margin-right: 200px;
    }
    .dados-user {
        margin-right: 140px;
    }
</style>

<body>
    <header>
        <div class="navbar-full">
            <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                <div class="container-fluid ">

                    <a class="navbar-brand logo" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse full" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>

                        </ul>
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success success" type="submit">Search</button>
                    </form>
                    {{-- {{ dd(Auth::check()) }} --}}
                    @if (Auth::check() == true)
                    <h6 class="id-professor">Seja Bem-vindo {{ Auth::user()->name }}</h6>
                    <form action="" method="POST">
                        @csrf
                        <div class="btn-group dados-user">
                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Seu perfil
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ver meus dados</a>
                                </li>
                                <li>
                                    <a href="{{ route('professores.destroy') }}" style="text-align: center;">Sair</a>
                                </li>
                            </ul>
                          </div>
                    </form>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                    @if (Auth::check() == false)
                        <a class="nav-link active entrar" aria-current="page" href="">Entrar</a>
                        <button  type="button" class="btn btn-info btn-cadastro"><a href="{{ route('professores.create') }}">Cadastre-se Grátis</a></button>
                </div>
                @endif
            </nav>
        </div>
    </header>

    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/menu/index.js"></script>
