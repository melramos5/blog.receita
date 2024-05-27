@extends('adminlte::page')

@section('content')


<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css')}}"/>
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js')}}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - EDITAR</div>

                <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ url('/postagem/' . $postagem->id . '/edit') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label for="fname">Categoria:</label><br>
                    <select class="form-control" name="categoria_id">

                    @foreach($categorias as $value)
                        @if($postagem->categoria_id === $value->id)
                            <option selected value="{{ $value->id }}">{{ $value->nome }}</option>
                        @else
                            <option value="{{ $value->id }}">{{ $value->nome }}</option>
                        @endif
                    @endforeach

                    </select>

                    <br>

                  <label for="fname">Título:</label><br>
                  <input type="text"  class="form-control" value="{{ $postagem->titulo }}" name="titulo"><br>


                  <label for="fname">Imagem:</label><br>
                  <input type="file"  class="form-control" name="imagem"><br>

                  <img src="data:image/png;base64,{{ $postagem->imagem ?? ''}}" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;"><br><br>

                  <label for="fname">Ingredientes:</label><br>
                  <textarea id="inp_editor1" class="form-control" name="ingredientes" >
                        {!! $postagem->ingredientes !!}
                  </textarea><br>

                  <label for="fname">Modo de Preparo:</label><br>
                  <textarea id="inp_editor2" class="form-control" name="preparo" >
                        {!! $postagem->preparo !!}
                  </textarea><br>

                  <input type="submit"  class="form-control" value="ENVIAR">

                </form>

                <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>

                <script>
                    var editor2 = new RichTextEditor("#inp_editor2");
                </script>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
