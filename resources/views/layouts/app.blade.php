<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Css/css/massas.css" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>MELANE massa</title>
</head>
<body>
    <div id="fundo">

    <!-------------------------------- NAVBAR --------------------------------->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url("/inicio")}}">
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

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="pesquisar receita" aria-label="Search" style="border-radius: 20px;">
          <i class="bi bi-search btn btn-danger me-2" style="border-radius: 20px;"></i>
        </form>
          <a href="entrar" class="btn btn-danger me-2" style="border-radius: 20px;"><i class="bi bi-person-fill"><span> entrar</span></i></a>
      </div>
    </nav>

    <br><br>

        <div class="container">
            @yield('content')
        </div>

        <br> <br>
        <footer class="rodape">
            <div class="container">
                <div class="row p-4">
                  <div class="col-md-3 mt-3">
                    <a class="navbar-brand" href="inicio">
                      <img src="../Css/img/logo.png" alt="" width="170" height="70">
                    </a>
                    <p></p>
                  </div>
                  <div class="col-md-3 mt-4">
                    <h4 class="fs-6">quem somos</h4>
                    <h4 class="fs-6">privacidade</h4>
                    <h4 class="fs-6">termos de uso</h4>
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

    </body>
    </html>
