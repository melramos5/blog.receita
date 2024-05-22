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
                    <img src="data:image/png;base64,{{ $value->imagem ?? ''}}" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                    <div class="mt-2">
                        <h4 class="fs-5">{{ $value->titulo }}</h4>
                        <p class="fw-light"></p>

                    </div>
                </div>
            </div>


      @endforeach

</section>

@endsection
