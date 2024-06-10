
@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/receita.css")}}" />
   <!----------------------------------------FOTO------------------------------------->

    <div class="foto text-center">
    <h2 class="titulo text-black fw-bold">{!! $postagem->titulo !!}</h2>
    <div class="container-fluid">
      <br>
      <img src="data:image/png;base64,{!! $postagem->imagem !!}"width="700px" height="400px" style="border-radius: 20px;">
        <p class="pub"{!! $postagem->user->name !!}></p>

        <div class="icones">
            <div class="btn-group" >
                <a href="#" class="btn btn" aria-current="page"><i class='far fa-bookmark' style='color:red;'></i> salvar</a>
                <a href="#" class="btn btn"><i class='far fa-flag' style='color:red;'></i> denunciar</a>
            </div>
        </div>
    </div>
  </div>

<!-----------------------------------------------ING---------------------------------------->

        <div class="ing" >
            <hr>
                <h2 class="h3 fw-bolder text-center" style="color:#5d3934">INGREDIENTES</h2>
            <hr>
                        <div class="mt-2">
                        <p>{!! $postagem->ingredientes !!}</p>
                        </div>
        </div>
            <hr>

<!------------------------------------PREP---------------------------->



<div class="prep" style="border-radius: 20px;">
    <div class="mt-2">
      <h2 class="fs-3 fw-bolder text-center" style="color:#5d3934">MODO DE PREPARO</h2>
            <br>
            <div class="container-fluid">
            <p>{!! $postagem->preparo !!}</p>
            </div>
    </div>
</div>


<!--------------------------------COMENTARIO----------------------->
<section class="comentario">
    <div classs="comentario">
    <div class="container-fluid">
    <h6>Gostou? Deixe um Comentario!</h6>
                  <div class="form-floating">

                <form method="POST" action="{{ url('/comentario/create') }}">
                    @csrf
                    <input type="hidden" id="custId" name="postagem_id" value="{{ $postagem->id }}">
                    <textarea class="form-control" name="conteudo"></textarea><br>

                <input type="submit"  class="btn btn-warning" value="ENVIAR">
                </form>

    </div>
    </div>
    </section>

    <br><br>
<h3>Comentarios:</h3>
@foreach ($postagem->comentarios as $value)
    <p>{{ $value->conteudo }}</p>
    <p>Feito Por: {{ $value->user->name }}</p>
    <p>Data: {{ $value->created_at }}
    <br><br>

@endforeach

    @endsection
