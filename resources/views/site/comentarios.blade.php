@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/comentario.css")}}" />

    <div class=botao>
        <div class="mt-2">
            <ul class="list-group">
                <li class="list-group-item">

                    @csrf
                    @foreach ($comentarios as $value)

                    <form method="POST" action="{{ url('/publicacao/' . $value->id) }}">

                        @csrf
                        @method('DELETE')
                        <input type="submit"  class="btn btn-danger" value="Excluir">

                        <tr>
                            <td>{{ $value->conteudo }} - </td>
                            <td><a class="btn btn-light" href="{{ url('/publicacao/' . $value->id . '/edit') }}" role="button">Editar</a></td>
                            <td><a class="btn btn-light" href="{{ url('/publicacao/' . $value->id) }}" role="button">Visualizar</a></td>
                        </tr>
                    </form>
                    <br> <hr>

        @endforeach

                </li>
             </ul>
         </div>
    </div>
@endsection
