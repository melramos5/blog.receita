
@extends('layouts.app')

@section('content')



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


@endsection
