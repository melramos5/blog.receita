<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view('login.entrar');
    }



     public function login(Request $request)
    {

        $user_exist = User::where('email', $request->email)->exists();

        if (! $user_exist){
            return redirect('entrar')->with('status', 'Usuario ou Senha Incorretos');

            dd('Não Existe');
        }

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)){
            Auth::login($user);

            return redirect('/')->with('/');

        }else{

            return redirect('entrar')->with('status', 'Usuario ou Senha Incorretos');
        }
    }


        public function logout(Request $request): RedirectResponse {

            Auth::logout();
            $request->session()->invalidate();

            return redirect('/');
    }

    public function cadastrar(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=Hash::make($request->password);
             //dd($request);
        $user->save();


        return redirect('/entrar')->with('status', 'USUÁRIO CADASTRADO COM SUCESSO');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

