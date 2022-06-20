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

    public function selfEditPassword() {

        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        return view('user.selfEditPassword', ['user' => $user]);
    }
    
    public function selfUpdatePassword(Request $request) {
        
        $user_id = Auth::id();

        //print_r($request->all());

        $message = [
            'password_old.required' => 'required',
            //'password_new.min' => 'O campo senha precisa ser maior do que :min !',
            'password_new.same' => 'Senhas não conferem.',
        ];

        $validatedData = $request->validate([
            'password_old' => 'required',
            'password_new' => 'required|same:password_new2',
        ], $message);
        
        $user = User::findOrFail($user_id);

        
        //-----------------------------------
        //echo('<br>$user->password: ' . $user->password);
        //@todo - fazer um if verificando se o $request->password_new == $request->password_new2
        // Caso nao seja
        //return redirect()->route('selfEditPassword')->with('message', 'Senhas não conferem.');

        /*if($request->password_new != $request->password_new2){
            
            return redirect()->route('selfEditPassword')->with('message', 'Senhas não conferem.');
        
        }*/
        //--------------------------------------------------------
        
        
        if (Hash::check($request->password_old, $user->password)){


            if (!empty(trim($request->password_new))) {

                echo('<br>Hash::make($request->password_new: ' . Hash::make($request->password_new));
                $user->password = Hash::make($request->password_new);     
                $user->save();

                //echo('<br>$user->password: ' . $user->password);
                //dd('<br>' . 'AQUI');

                return redirect()->route('selfEditPassword')->with('message', 'Senha atualizada com sucesso!');
            }

        } else {
            return redirect()->route('selfEditPassword')->with('message', 'Senha inválida, tente novamente.');
        }
           
    }

}