@extends('layouts.app')

@section('content')

<ul class="list-group">
    <li class="list-group-item">


        @foreach ($postagens as $value)
        <tr>
        <td>{{ $value->categoria->nome }} - </td>
        <td>{{ $value->titulo }}</td>
        <td><a class="btn btn-primary" href="{{ url('/publicacao/' . $value->id) }}" role="button">Visualizar</a></td>
        <td><a class="btn btn-warning" href="{{ url('/publicacao/' . $value->id . '/edit') }}" role="button">Editar</a></td>
        <td><a class="btn btn-light" href="{{ url('/publicacao/' . $value->id . '/edit') }}" role="button">

                <form method="POST" action="{{ url('/publicacao/' . $value->id) }}">
                    @csrf
                    @method('DELETE')
                  <input type="submit"  class="btn btn-light" value="Excluir">
                </form> </a> <br> <hr>

        </td>
        </tr>
    @endforeach


    </li>
  </ul>

@endsection
