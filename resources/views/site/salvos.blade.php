@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/salvos.css")}}" />

<div class=text-center>
<h3> Minhas Publicações Salvas</h3>
</div>


<div class="row card-grup row-cols-3 p-1">

    @foreach($receitas as $value)

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


@endsection
