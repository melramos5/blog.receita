@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/receitausuario.css")}}" />

<div class=botao>
    <div class="mt-2">
<ul class="list-group">

    <li class="list-group-item">
        @csrf
        @foreach ($postagens as $value)
<form method="POST" action="{{ url('/publicacao/' . $value->id) }}">
         @csrf
         @method('DELETE')
    <input type="submit"  class="btn btn-danger" value="Excluir">

        <tr>
        <td>{{ $value->categoria->nome }} - </td>
        <td>{{ $value->titulo }}</td>
        <td><a class="btn btn-light" href="{{ url('/publicacao/' . $value->id . '/edit') }}" role="button">Editar</a></td>
        <td><a class="btn btn-light" href="{{ url('/publicacao/' . $value->id) }}" role="button">Visualizar</a></td>

     </form> </a> <br><hr >

        </td>
        </tr>
    @endforeach


    </li>
  </ul>
</div>
</div>
@endsection
