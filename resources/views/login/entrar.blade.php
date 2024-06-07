
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url("/assets/css/loggin.css")}}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>MELANE log</title>
</head>
<body>
    <div id="fundo">

    <!-------------------------------- NAVBAR --------------------------------->
    <nav class="navbar navbar-expand-lg " >
        <div class="container" >
            <a class="navbar-brand" href="{{ url("/")}}">
                <img src="{{ url("/assets/imagens/logo.png")}}" alt="" width="170" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <br> <br>


    <!----------------------- CONTEUDO------------------------------------------------->


    <div class="login" >
        <div class="container p-4" >
            <div class="row ">
                <div class="user text-center">
                    <img src="{{ url("/assets/imagens/logo.png")}}" width="100">
                </div>

                <div class="col-md-12" >
                <hr>
                <h3 class="h3 fw-bolder text-center">LOGIN</h3>
                <br>

            <form action="{{ url('login_usuario')}}" method="post">
                @csrf
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class=" col-sm-2 col-form-label" style="border-radius: 20px;">Email</label>
                        <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" style="border-radius: 20px;">
                      </div>
                    </div>

                      <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                          <input name="password" type="password" class="form-control" id="inputPassword" placeholder="senha" style="border-radius: 20px;">
                        </div>
                      </div>


                      <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="LOGIN">Login</button>
                </form>


                    </div>
                    <br>
                      <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
                        <a href="recuperar.html" class="link link-primary"><br>Esqueci minha senha</a>
                      </div>
                      <hr>
                      <p class="cadastro text-center">Não tem uma conta? <a href="cadastro" class="link-danger"><br>Cadastre-se</a></p>

                </div>
            </div>
        </div>
    </div>



    <!--------------------------- FOOTER---------------------------------------------->

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
                <h3 class="fs-6">Quem somos</h3>
                <h3 class="fs-6">Privacidade</h3>
                <h3 class="fs-6">Termos de uso</h3>
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
