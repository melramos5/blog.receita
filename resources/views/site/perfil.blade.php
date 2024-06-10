@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/perfil.css")}}" />
<!-----------------------------PERFIL----------------------------->

    <section class="perfil">
        <div class="container-fluid">
            <div class="row p-5 align-items-center" >
                <div class="col-md-12" >
                    <img src="{{ url("/assets/imagens/perfil.png")}}" width="170">
                </div>
                <div class="col-md-12" >
                    <h2 class="text-danger fw-bold ms-3 py-3">{!! $perfil->name !!}</h2>

                </div>
                <hr>

                 <div class="icones">
                    <div class="row p-6 align-items-center" >
                      <div class="d-grid gap-2">
                        <div class="btn-group">
                    <a href="perfil.html" class="btn btn" aria-current="page"><i class="bi bi-pen-fill text-danger"> minhas receitas</i></a>
                    <a href="{{ url("/salvos")}}" class="btn btn"><i class="bi bi-bookmark-fill"> meus salvos</i></a>
                    <a href="#" class="btn btn"><i class="bi bi-chat-fill"> meus comentários</i></a>
                        </div>
                      </div>
                    </div>
                </div>
                <hr>
                <br><br>
            </div>
                <h5>você não publicou nenhuma receita ainda :</h5>
                  <a href="{{ url("/publicar")}}" class="link-secondary"><i class="bi bi-pencil-square"> publicar uma receita</i></a>






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


        </div>
    </section>

@endsection
