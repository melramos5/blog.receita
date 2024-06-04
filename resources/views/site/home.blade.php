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

    <!----------------------- RECEITAS POPULARES------------------------------------------------->

      <section class="receitas" style="background-color: #faead5;">
        <div class="container " >
          <div class="row ">
            <div class="col-12">
                <h2 class="fw-bold mt-3 text-center">Receitas Populares</h2>
            </div>
        </div>


        <div class="row card-grup row-cols-3 p-1">

                @foreach($receitas as $value)


                <div class="col-4 p-4 mt-1">
                    <a class="navbar-brand" href="{{ url("/receita/" . $value->id)}}">
                        <img src="data:image/png;base64,{{ $value->imagem ?? ''}}" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;"> </a>

                            <div class="mt-2">
                                <h4 class="fs-5 text-center">{{ $value->titulo }}</h4>
                                <p class="fw-light"></p>

                            </div>
                </div>
                @endforeach

            </div>


    <!--------------------------NOVIDADE ---------------------------->

    <section class="receitas" >
      <div class="container p-6">
        <div class="row ">
          <div class="col-12">
              <h2 class="fw-bold mt-2 text-center">Adicionadas Recentemente </h2>
          </div>
      </div>


            <div class="row p-3">

            @foreach($receitasRecentes as $value)

             <div class="col-md-3 p-3 mt-3">
                    <a class="navbar-brand" href="{{ url("/receita/" . $value->id)}}">
                        <img src="data:image/png;base64,{{ $value->imagem ?? ''}}" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;"> </a>

                            <div class="mt-2">
                                <h4 class="fs-5 text-center">{{ $value->titulo }}</h4>
                                <p class="fw-light"></p>

                            </div>
                </div>
                @endforeach

            </div>


    </div>
  </section>


@endsection
