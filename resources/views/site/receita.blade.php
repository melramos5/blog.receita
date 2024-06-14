
@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/receita.css")}}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>

   <!--FOTO-->

<div class="foto text-center">
    <h2 class="titulo text-black fw-bold">{!! $postagem->titulo !!}</h2>
    <div class="container-fluid">
      <br>
      <img src="data:image/png;base64,{!! $postagem->imagem !!}" class="img-fluid" width="700px" height="400px" style="border-radius: 20px;">
        <p class="pub"{!! $postagem->user->name !!}></p>

        <div class="icones">
            <div class="btn-group" >
                <a href="#" class="btn btn" aria-current="page"><i class="bi bi-bookmark" style='color:red;'></i> salvar</a>
                <a href="#" class="btn btn"><i class='bi bi-flag' style='color:red;'></i> denunciar</a>
            </div>
        </div>
    </div>
</div>
<!-- -fill = preenchido  -->

<!--ING-->

<div class="conteudo" >
    <div class="container-fluid p-6" >
        <div class="row p-4">
             <div class="col-md-12" >
            <br> <br>
                <div class="ing" >
                    <hr>
                    <h2 class="h3 fw-bolder text-center" style="color:#5d3934">INGREDIENTES</h2>
                    <hr>
                        <h5> {!! $postagem->ingredientes !!} </h5>
                </div>
             </div>
        </div>
    </div>
    <hr>

<!--PREP-->

    <div class="prep" style="border-radius: 20px;">
        <div class="mt-2">
            <h2 class="fs-3 fw-bolder text-center" style="color:#5d3934">MODO DE PREPARO</h2>
            <br>
            <ul>
                <p class="fs-5" style="color:#490e0d">{!! $postagem->preparo !!}</p></p>
            </ul>
         </div>
    </div>
</div>

<!--COMENTAR-->

<div class="comment">
    <div class="container-fluid p-6">
        <div class="row p-6">
            <div class="col-md-6  mt-4">
              <div class="com" style="border-radius: 20px;">
                <div class="mt-2">
                    <h3>gostou? deixe um comentario</h3>
                    <div class="form-floating">
                        <form method="POST" action="{{ url('/comentario/create') }}">
                            @csrf
                            <input type="hidden" id="custId" name="postagem_id" value="{{ $postagem->id }}">
                            <textarea class="form-control" name="conteudo"></textarea><br>
                            <input type="submit" class="btn btn-warning" value="ENVIAR" style="float: right;">
                        </form>
                        <br>
                    </div>
                </div>
              </div>
            </div>


<!--COMENTARIOS-->


<h3>Comentarios:</h3>
@foreach ($postagem->comentarios as $value)
    <p>{{ $value->conteudo }}</p>
    <p>Feito Por: {{ $value->user->name }}</p>
    <p>Data: {{ $value->created_at }}
    <br><br>

@endforeach

@endsection

