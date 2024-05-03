@extends('layouts.app')

@section('content')

<section class="receitas" >
    <div class="container p-6">
      <div class="row ">
        <div class="col-12">
            <h2 class="fw-bold mt-2 text-center">{{ $categoria->nome ?? 'todas'}}</h2>
        </div>
    </div>


            @foreach ($receitas as $value)

            <div class="row p-3">
                <div class="col-md-3 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                    <div class="mt-2">
                        <h4 class="fs-5">{{ $value->titulo }}</h4>
                        <p class="fw-light"></p>

                    </div>
                </div>

            @endforeach







            <div class="col-md-3 p-3 mt-3">
              <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
              <div class="mt-2">
                  <h4 class="fs-5">massa de pizza</h4>
                  <p class="fw-light"></p>

              </div>
          </div>
            <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">nhoque</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">macarrão com salsicha</h4>
                    <p class="fw-light"></p>

                </div>
            </div>

            <div class="col-md-3 p-3 mt-3">
              <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
              <div class="mt-2">
                  <h4 class="fs-5">ravioli</h4>
                  <p class="fw-light"></p>

              </div>
          </div>
          <div class="col-md-3 p-3 mt-3">
            <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
            <div class="mt-2">
                <h4 class="fs-5">massa de pastel </h4>
                <p class="fw-light"></p>

            </div>
        </div>
          <div class="col-md-3 p-3 mt-3">
              <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
              <div class="mt-2">
                  <h4 class="fs-5">lasanha de frango</h4>
                  <p class="fw-light"></p>

              </div>
          </div>
          <div class="col-md-3 p-3 mt-3">
              <img src="https://www.sabornamesa.com.br/media/k2/items/cache/665e96c29d55b13435d7a8d39deafe53_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
              <div class="mt-2">
                  <h4 class="fs-5">panqueca</h4>
                  <p class="fw-light"></p>

              </div>
          </div>
          </div>
    </div>
</section>

@endsection
