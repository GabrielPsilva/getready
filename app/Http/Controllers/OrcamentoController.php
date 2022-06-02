<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;
use App\Models\Orcamento;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $celulares = Celular::orderBy('nome', 'ASC')->pluck('nome', 'id');
        //dd($celulares);
        return view('orcamento.create', ['celulares' => $celulares]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'celular_id.required'  => 'Escolher um celular é obrigatorio!',
            'nome.required'  => 'O campo :attribute é obrigatorio!',
            'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
            'email.required' => 'O campo :attribute é obrigatorio!',
            'cpf.required'   => 'O campo :attribute é obrigatorio!',
            'telefone.required' => 'O campo :attribute é obrigatorio!',
        ];

        $validated = $request->validate([
            'celular_id'  => 'required',
            'nome'          => 'required|min:3',
            'email'         => 'required',
            'cpf'           => 'cpf',
            'telefone'      =>'required', 
        ], $messages);

        $orcamento = new Orcamento;
        $orcamento->celular_id      = $request->celular_id;
        $orcamento->nome          = $request->nome;
        $orcamento->email          = $request->email;
        $orcamento->cpf            = $request->cpf;
        $orcamento->telefone       = $request->telefone;
        $orcamento->save();

        return redirect('/orcamento/create')->with('status', 'Orçamento efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function calcular(Request $request)
    {
        $dados=Celular::find($request["celular_id"]);

        $dataAtual=date('y');

        $dataFabricacao=$dados["data de fabricacao"];


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
