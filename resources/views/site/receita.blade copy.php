<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url("/assets/css/receita.css")}}"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>MELANE fettuccine</title>
</head>
<body>
    <div id="fundo">

    <!-------------------------------- NAVBAR --------------------------------->

    <nav class="navbar navbar-expand-lg " style="background-color: #faead5;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url("/inicio")}}">
                <img src="{{ url("/assets/imagens/logo.png")}}" alt="" width="170" height="70">
            </a>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="massa nav-link active fw-bolder text-danger" href="Massas.html">massas</a>
                  </li>
                  <li class="nav-item">
                    <a class="carne nav-link active fw-bolder text-danger" href="Carnes.html">carnes</a>
                  </li>
                  <li class="nav-item">
                    <a class="sobremesa nav-link active fw-bolder text-danger" href="Sobremesas.html">sobremesas</a>
                  </li>
                  <li class="nav-item">
                    <a class="lanche nav-link active fw-bolder text-danger" href="#">lanches</a>
                  </li>
                  <li class="nav-item">
                    <a class="sopa nav-link active fw-bolder text-danger" href="#">sopas</a>
                  </li>
            </ul>
          </div>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="pesquisar receita" aria-label="Search" style="border-radius: 20px;">
      <i class="bi bi-search btn btn-danger me-2" style="border-radius: 20px;"></i>
    </form>

<div class="dropdown">
        <a href="perfil3.html" class="btn btn me-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           <img src="../img/perfil.png" width="25">
             mel ramos
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background-color: #FBF7F1;">
          <li><a class="dropdown-item" href="perfil.html"><i class="bi bi-person"> perfil</i></a></li>
          <li><a class="dropdown-item" href="perfil3.html"><i class="bi bi-bookmark"> salvos</i></a></li>
          <li><a class="dropdown-item" href="publicar.html"><i class="bi bi-pencil-square"> publicar</i></a></li>
          <li><a class="dropdown-item" href="perfil2.html"><i class="bi bi-pencil"> editar perfil</i></a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"> log out</i></a></li>
        </ul>
    </div>
      <button class="hamburguer navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <i class="bi bi-list"></i>
    </button>
    </div>
</nav>

    <!----------------------------CONTEUDO------------------------->

<div class="container-fluid">
    <div class="foto">
     <h2 class="titulo text-black fw-bold"> FETTUCCINE ALFREDO</h2>
<br>
     <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" width="700px" height="400px" style="border-radius: 20px;">
        <p class="pub">publicado por jerson resende</p>

    </div>
</div>

<!---------------------------INGREDIENTES-------------------------------->

<div class="container-fluid">
<div class="ingrediente" style="border-radius: 20px;">
    <h2> ingredientes</h2>
<br>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          250 g de macarrão fettuccine
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          1 xícara (chá) de creme de leite fresco
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          2 colheres (sopa) de manteiga
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          ⅔ de xícara (chá) de queijo parmesão ralado
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          sal a gosto
        </label>
      </div>
    </div>
<div class="hr" style="padding-left: 400px; padding-right: 400px; color: coral;">
<hr>
</div>
</div>
<!-------------------------------PREPARO-------------------------->

  <section class="preparo">
    <div class="container-fluid">
        <div class="row " >
            <div class="d-flex col-md-6" >
              <h2> Modo de preparo </h2> <i class="fa-solid fa-clock"></i>
             </div>
              <ul>
                <li> Numa panela grande, coloque 3 litros de água e 1 colher (sopa) de sal. </li>
                <li>Leve ao fogo alto. </li>
                <li>Quando a água ferver, coloque o macarrão e deixe cozinhar conforme as instruções da embalagem. </li>
                <li>Cuidado para não deixar o macarrão cozinhar demais, ele deve ficar al dente</li>
                 <li>Enquanto o macarrão cozinha, comece a preparar o molho. </li>
                 <li>Numa panela, junte a manteiga e o creme de leite fresco e leve ao fogo alto para ferver, mexendo sempre.</li>
                 <li>Sem parar de mexer, deixe cozinhar por 3 minutos. Desligue o fogo e reserve.</li>
                 <li>Com cuidado, despeje o macarrão cozido em um escorredor.</li>
                 <li>A seguir, transfira o fettuccine para 2 pratos individuais. </li>
                 <li>Com uma colher, distribua o molho bem quente sobre o macarrão, misture e polvilhe com o parmesão ralado. </li>
                 <li>Sirva a seguir.  </li>
             </ul>
        </div>
    </div>
</section>

  <br> <br>
<!---------------------------COMENTÁRIO----------------------------------------->

<section class="comentario">
  <div class="container-fluid">
    <div class="comentario">
    <h6>Comentário</h6>
    <textarea class="form-control"></textarea>
  </div>
  </div>
</section>
<button type="button" class="btn btn-warning">ENVIAR</button>

<!---------------------------------- FOOTER------------------------------------->

    <footer class="rodape">
        <div class="container">
            <div class="row p-4">
              <div class="col-md-3 mt-3">
                <a class="navbar-brand" href="#">
                  <img src="../img/logo.png" alt="" width="170" height="70">
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

<script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>

</body>
</html>
