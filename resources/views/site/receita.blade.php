
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
    <h6>Comentário</h6>
    <textarea class="form-control"></textarea>
  </div>
  </div>
</section>
<button type="button" class="btn btn-warning">ENVIAR</button>


@endsection
