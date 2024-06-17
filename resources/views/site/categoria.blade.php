@extends('layouts.app')

@section('content')

<section class="receitas" >
    <div class="container p-6">
        <div class="row ">
            <div class="col-12">
                <h2 class="fw-bold mt-2 text-center">{{ $receitas->first()->categoria->nome ?? 'Todas'}}</h2>
            </div>
        </div>


            <div class="row card-grup row-cols-3 p-1">

                @foreach ($receitas as $value)

                <div class="col-3 p-3 mt-1">
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
