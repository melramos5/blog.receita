<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;

class PostagemController extends Controller
{

    public function index()
    {
        $postagens = Postagem::orderBy('id', 'ASC')->get();
        return view('postagem.index', ['postagens' => $postagens]);
    }


    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.create', ['categorias' => $categorias]);
    }


    public function store(Request $request)
    {

        $user_id = auth()->user()->id;

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'ingredientes.required' => 'O campo :attribute é obrigatório!',
            'preparo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'ingredientes' => 'required|min:5',
            'preparo' => 'required|min:5',
        ], $messages);


        $imagem = $request->file('imagem');


        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->imagem = base64_encode (file_get_contents ($imagem));
        $postagem->ingredientes = $request->ingredientes;
        $postagem->preparo = $request->preparo;
        $postagem->user_id = $user_id;
        $postagem->categoria_id = $request->categoria_id;
        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem salva com sucesso!');

    }


    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.show', ['postagem' => $postagem]);
    }


    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.edit', ['postagem' => $postagem, 'categorias' => $categorias]);
    }


    public function update(Request $request, string $id)
    {


        $user_id = auth()->user()->id;

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'ingredientes.required' => 'O campo :attribute é obrigatório!',
            'preparo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'ingredientes' => 'required|min:5',
            'preparo' => 'required|min:5',
        ], $messages);

        $imagem = $request->file('imagem');

        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->imagem = base64_encode (file_get_contents ($imagem));
        $postagem->ingredientes = $request->ingredientes;
        $postagem->preparo = $request->preparo;
        $postagem->user_id = $user_id;
        $postagem->categoria_id = $request->categoria_id;
        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem atualizada com sucesso!');

    }


    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect('postagem')->with('status', 'Postagem excluida com sucesso!');
    }
}
