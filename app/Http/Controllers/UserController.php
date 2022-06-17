<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id', 'ASC')->get();
        return view('user.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'Este e-mail não é valido!',
            'password.required' => 'O campo nome é obrigatório!',
            'password.same' => 'As senham precisam ser identicas!',

        ];

        $validateData = $request->validate([
            'name'          => 'required|min:3',
            'email'         => 'required|email',
            'password'      =>'required|same:confirm-password',
        ], $message);


        $user = new User;
        $user->name         = $request->name;
        $user->perfil       = $request->perfil;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index')->with('message', "user {$user->nome} criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('user.show', ['user' => $user]);
    }

    public function perfil()
    {
        $user = Auth::user();

        return view('user.perfil', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'Este e-mail não é valido!',
        ];

        $validateData = $request->validate([
            'name'          => 'required|min:3',
            'email'         => 'required|email',
            'password'      => 'same:confirm-password',
        ], $message);


        $user = User::findOrFail($id);
        $user->name         = $request->name;
        $user->perfil       = $request->perfil;
        $user->email        = $request->email;
        if(!empty(trim($request->password))){
            $user->password     = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('user.index')->with('message', "user {$user->nome} atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('message', 'usuário excluido com sucesso!');
    }
}