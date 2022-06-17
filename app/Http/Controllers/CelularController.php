<?php

namespace App\Http\Controllers;

use App\Models\Celular;
//use App\Models\Categoria;
use Illuminate\Foundation\Console\ViewCacheCommand;
use Illuminate\Http\Request;

class CelularController extends Controller
{


    /*

	https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller


    Dicas sobre resouces
    index - listar todos os itens
    create - exibe formulario para criacao
    store - armazena conteudo do formulário para criacao
    show - exibe um item
    edit - formulario de edicao de um item
    update - salva e edicao de um item
    destroy - exclui um item



        //index / listar
        // $produtos = Produto::orderBy('nome', 'ASC')
        //             ->get();
        // dd($produtos);


        //store / salvar
        // $produto = new Produto;
        // $produto->nome  = 'Monitor Ultrawide 36';
        // $produto->valor = 3000;
        // $produto->save();

        // dd('Salvou!');

        //show / exibir
        // $produto = Produto::findOrFail(4);
        // dd($produto);

        //update / atualizar
        // $produto = Produto::findOrFail(4);
        // $produto->nome  = 'Super Monitor Ultrawide 36 plus';
        // $produto->valor = 5000;
        // $produto->save();

        // dd('Atualizou!');

        //destroy / excluir
        $produto = Produto::findOrFail(4);
        $produto->delete();

        dd('Excluiu!');

    */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Celular::orderBy('id', 'ASC')->get();
        return view('celular.index', ['celulares' => $celulares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('celular.create');
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
            'nome.required'  => 'O campo :attribute é obrigatorio!',
            'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
            'valor.required' => 'O campo :attribute é obrigatorio!',
            'valor.numeric'  => 'O campo :attribute precisa ser numérico!',
            'data de fabricacao.required' => 'O campo :attribute é obrigatório!'
        ];

        $validated = $request->validate([
            'nome'               => 'required|min:5',
            'valor'              => 'required|numeric',
            'data de fabricacao' => 'required',
        ], $messages);

        $celular = new Celular;
        $celular->nome               = $request->nome;
        $celular->valor              = $request->valor;
        $celular->data_de_fabricacao = $request->data_de_fabricacao;
        $celular->save();

        return redirect('/celular')->with('status', 'Celular criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $celular = Celular::findOrFail($id);
        return view('celular.show', ['celular' => $celular]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $celular = Celular::findOrFail($id);
        return view('celular.edit', ['celular' => $celular]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $messages = [
            'nome.required'  => 'O campo :attribute é obrigatorio!',
            'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
            'valor.required' => 'O campo :attribute é obrigatorio!',
            'valor.numeric'  => 'O campo :attribute precisa ser numérico!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
            'valor' => 'required|numeric',
        ], $messages);

        $celular = Celular::findOrFail($id);
        $celular->nome          = $request->nome;
        $celular->valor         = $request->valor;
        $celular->save();

        return redirect('/celular')->with('status', 'Celular atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $celular = Celular::findOrFail($id);
        $celular->delete();

        return redirect('/celular')->with('status', 'Celular excluido com sucesso!');

    }
}
