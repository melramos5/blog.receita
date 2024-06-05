
@extends('layouts.app')

@section('content')



    <!----------------------------CONTEUDO------------------------->

<div class="container-fluid">
    <div class="foto">
     <h2 class="titulo text-black fw-bold">{!! $postagem->titulo !!}</h2>
<br>
     <img src="data:image/png;base64,{!! $postagem->imagem !!}"width="700px" height="400px" style="border-radius: 20px;">
        <p class="pub"{!! $postagem->user->name !!}></p>

    </div>
</div>

<!---------------------------INGREDIENTES-------------------------------->

<div class="container-fluid">
<div class="ingrediente" style="border-radius: 20px;">
    <h2> ingredientes</h2>
<br>
        <p>{!! $postagem->ingredientes !!}</p>

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
             <p>{!! $postagem->preparo !!}</p>
        </div>
    </div>
</section>

  <br> <br>
<!---------------------------COMENTÁRIO----------------------------------------->


<section class="comentario">
    <div class="container-fluid">
    <div class="comentario">

    <h3>Faça seu Comentario:</h3>
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
