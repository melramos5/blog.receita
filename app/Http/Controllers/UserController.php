<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login(Request $request)
    {

        $user_exist = User::where('email', $request->email)->exists();

        if (! $user_exist){
            return redirect('entrar')->with('status', 'erro');

            dd('Não Existe');
        }

        //dd($user_exist);
        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)){
            Auth::login($user);
            //redirecionar dashboard
            //dd(auth()->user());
            return redirect('/')->with('/');



        }else{
            //redirecionar para tela anterior mostrando mensagem login ou senha invalida
            return redirect('entrar')->with('status', 'erro');
        }
    }


    public function index()
    {
        //
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
