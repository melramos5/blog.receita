@extends('layouts.app')

@section('content')


<!----------------------------------CARROSSEL--------------------------------->

<div class="container text-center py-5 ">
  <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.sabornamesa.com.br/media/k2/items/cache/681a23d9bda3cc6608e358bb4db90e3a_XL.jpg" height="500" class="d-block w-100" alt="" style="border-radius: 20px;" >
          <div class="carousel-caption d-none d-md-block">
            <h5>Torta Holandesa</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://classic.exame.com/wp-content/uploads/2022/08/Tiramisu-Fasano.jpg?quality=70&strip=info&w=1200" height="500" class="d-block w-100" alt="" style="border-radius: 20px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tiramisu</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://p2.trrsf.com/image/fget/cf/942/530/images.terra.com/2023/03/31/602302592-tamanho-padrao-gc-64.jpg"  height="500" class="d-block w-100" alt="" style="border-radius: 20px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Torta de Limão</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

    <!----------------------- RECEITAS------------------------------------------------->

      <section class="receitas" style="background-color: #FBF7F1;">
        <div class="container " >
          <div class="row ">
            <div class="col-12">
                <h2 class="fw-bold mt-3 text-center">Receitas Populares</h2>
            </div>
        </div>
            <div class="row p-3">
                <div class="col-md-4 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;" >
                    <div class="mt-2">
                        <h4 class="fs-5">petit gateau</h4>
                        <p class="fw-light"></p>

                    </div>
                </div>
                <div class="col-md-4 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">gurjão de frango</h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
                <div class="col-md-4 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                    <div class="mt-2">
                        <h4 class="fs-5">filé de frango </h4>
                        <p class="fw-light"></p>

                    </div>
                </div>
                <div class="col-md-4 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                    <div class="mt-2">
                        <h4 class="fs-5">palha italiana </h4>
                        <p class="fw-light"></p>

                    </div>
                </div>

                <div class="col-md-4 p-3 mt-3">
                    <a href="{{ url("/inicio")}}">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;"> </a>
                  <div class="mt-2">
                      <h4 class="fs-5">cookie </h4>
                      <p class="fw-light"></p>


                  </div>
              </div>
              <div class="col-md-4 p-3 mt-3">
                <a href="../receitas/fettuccine.html">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5 text-danger">
                      <button type="button" class="btn btn-light">fettuccine</button>
                    </h4>
                    <p class="fw-light"></p>
                  </a>
                </div>
              </div>
              </div>
        </div>
    </section>


    <!--------------------------NOVIDADE ---------------------------->

    <section class="receitas" >
      <div class="container p-6">
        <div class="row ">
          <div class="col-12">
              <h2 class="fw-bold mt-2 text-center">Adicionadas Recentemente </h2>
          </div>
      </div>
          <div class="row p-3">
              <div class="col-md-3 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">bife à cavalo</h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
              <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">torta de ouro branco</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
              <div class="col-md-3 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">carne de sol </h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
              <div class="col-md-3 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">salada caesar </h4>
                      <p class="fw-light"></p>

                  </div>
              </div>

              <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">frango com quiabo </h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            <div class="col-md-3 p-3 mt-3">
              <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
              <div class="mt-2">
                  <h4 class="fs-5">frango assado com batata </h4>
                  <p class="fw-light"></p>

              </div>
          </div>
            <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">bolo de milho com fubá</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">camarão frito</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            </div>
      </div>
  </section>


@endsection
