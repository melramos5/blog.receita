@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>

                <div class="card-body">

                    <strong>Categoria:</strong>          {{ $postagem->Categoria->nome }}<br>
                    <strong>Título:</strong>             {{ $postagem->titulo }}<br>
                    <strong>Autor:</strong>              {{ $postagem->user->name }}<br>
                    <strong>Imagem:</strong><br>         <img src="data:image/png;base64,{{ $postagem->imagem ?? ''}}" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">  <br><br>
                    <strong>Ingredientes:</strong>
                    <br>
                        {!! $postagem->ingredientes !!}
                    <br>

                    <strong>Modo de Preparo:</strong>
                        <br>
                            {!! $postagem->preparo !!}
                        <br>
                    <strong>Criação:</strong>           {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}<br>
                    <strong>Atualização:</strong>       {{ \Carbon\Carbon::parse($postagem->updated_at)->format('d/m/Y h:i:s') }}<br>
                 </div>

            </div>
        </div>
    </div>
</div>
@endsection
