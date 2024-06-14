<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url("/assets/css/home.css")}}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>MELANE</title>
</head>
<body>
    <div id="fundo">
    <!-------------------------------- NAVBAR --------------------------------->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url("/")}}">
          <img src="{{ url("/assets/imagens/logo.png")}}" alt="" width="170" height="70"></a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            @foreach ( $categorias as $value)
            <li class="nav-item">
                <a class="nav-link active fw-bolder text-danger" href="{{ url ('site/categoria/' . $value->id) }}">{{ $value->nome }}</a>
              </li>
            @endforeach
            </li>
          </ul>
        </div>
        @guest
   <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="pesquisar receita" aria-label="Search" style="border-radius: 20px;">
          <i class="bi bi-search btn btn-danger me-2" style="border-radius: 20px;"></i>
        </form>
          <a href="{{ url("/entrar")}}" class="btn btn-danger me-2" style="border-radius: 20px;"><i class="bi bi-person-fill"><span> entrar</span></i></a>
      </div>
@else
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="pesquisar receita" aria-label="Search" style="border-radius: 20px;">
    <i class="bi bi-search btn btn-danger me-2" style="border-radius: 20px;"></i>
  </form>
<div class="dropdown">
      <a href="perfil3.html" class="btn btn me-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
         <img src="{{ url("/assets/imagens/perfil.png")}}" width="25" >
         {!! $perfil->name !!}
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background-color: #FBF7F1;">
        <li><a class="dropdown-item" href="{{ url("/perfil")}}"><i class="bi bi-person"> perfil</i></a></li>
        <li><a class="dropdown-item" href="{{ url("/salvos")}}"><i class="bi bi-bookmark"> salvos</i></a></li>
        <li><a class="dropdown-item" href="{{ url("/publicar")}}"><i class="bi bi-pencil-square"> publicar</i></a></li>
        <li><a class="dropdown-item" href="perfil2.html"><i class="bi bi-pencil"> editar perfil</i></a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ url("/logout")}}"><i class="bi bi-box-arrow-right"> sair</i></a></li>
      </ul>
  </div>
    <button class="hamburguer navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <i class="bi bi-list"></i>
  </button>
  </div>
@endguest
    </nav>
        <!-------------------------------- FOOTER --------------------------------->

    <br><br>

<footer>
        <div class="container">
            @yield('content')
        </div>
        <br> <br>
        <footer class="rodape">
            <div class="container">
                <div class="row p-4">
                  <div class="col-md-3 mt-3">
                    <a class="navbar-brand" href="{{ url("/")}}">
                      <img src="{{ url("/assets/imagens/logo.png")}}" alt="" width="170" height="70">
                    </a>
                    <p></p>
                  </div>
                  <div class="col-md-3 mt-4">
                    <h4 class="fs-6">Quem Somos</h4>
                    <h4 class="fs-6">Privacidade</h4>
                    <h4 class="fs-6">Termos de Uso</h4>
                  </div>
                  <div class="col-md-4 mt-3">
                    <h3 class="fs-6 ms-3">REDES SOCIAIS</h3>
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link text-primary fs-3" aria-current="page" href="#"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-info fs-3" href="#"><i class="bi bi-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-danger fs-3" href="#"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success fs-3" href="#"><i class="bi bi-whatsapp"></i></a>
                          </li>
                      </ul>
                  </div>
                </div>
              </div>
        </footer>
    </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

</footer>

    </body>
    </html>
