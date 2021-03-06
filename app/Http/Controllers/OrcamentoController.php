<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;
use App\Models\Orcamento;
use Barryvdh\DomPDF\Facade\Pdf;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamentos = Orcamento::orderBy('id', 'DESC')->get();
        return view('orcamento.index', ['orcamentos' => $orcamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create_pdf(Request $request)
    {
        $orcamento = $request->session()->get('orcamento');
        $pdf = PDF::loadView('orcamento.pdf', ['orcamento' => $orcamento]);
        return $pdf->download('orcamento.pdf');
        
    }

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
            'celular_id.required'   => 'Escolher um celular é obrigatorio!',
            'nome.required'         => 'O campo :attribute é obrigatorio!',
            'nome.min'              => 'O :attribute precisa ter no mínimo :min.',
            'email.required'        => 'O campo :attribute é obrigatorio!',
            'cpf.required'          => 'O campo :attribute é obrigatorio!',
            'telefone.required'     => 'O campo :attribute é obrigatorio!',
            'ano.required'          => 'O campo :attribute é obrigatorio!',
        ];

        $validated = $request->validate([
            'celular_id'    => 'required',
            'nome'          => 'required|min:3',
            'email'         => 'required',
            'cpf'           => 'required',
            'telefone'      => 'required', 
            'ano'           => 'required',
        ], $messages);
        
        $celular = Celular::where('id', $request->celular_id)->first();
        //dd($celular);

        $ano_atual = date("Y");
        //dd($ano_atual);

        $valor_total = ($celular->valor - (($ano_atual - $request->ano) * 10)) / 2;
        $valor_parcela = round($valor_total/12, 2);

        $orcamento = new Orcamento;
        $orcamento->celular_id     = $request->celular_id;
        $orcamento->nome           = $request->nome;
        $orcamento->email          = $request->email;
        $orcamento->cpf            = $request->cpf;
        $orcamento->telefone       = $request->telefone;
        $orcamento->ano            = $request->ano;
        $orcamento->valor_total    = round($valor_total,2);
        $orcamento->valor_parcela  = $valor_parcela;
        $orcamento->save();

        $request->session()->put('orcamento', $orcamento);

        /*$mensagem = "Caro(a) {$orcamento->nome}<br>";
        $mensagem .= "o valor total do seu seguro é R$ $orcamento->valor_total <br>";
        for ($i=1; $i <= 12; $i++) { 
            $mensagem .= "- parcela {$i} = R$ {$orcamento->valor_parcela}<br>";
        }*/
        //dd($mensagem);

        //return redirect('/orcamento/create')->with('status', $mensagem);//'Orçamento efetuado com sucesso!');
        //$request->session()->put('mensagem', $mensagem);
        
        $celulares = Celular::orderBy('nome', 'ASC')->pluck('nome', 'id');
        return view('orcamento.create', ['celulares' => $celulares, 'orcamento' => $orcamento]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orcamento = Orcamento::findOrFail($id);
        return view('orcamento.show', ['orcamento' => $orcamento]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orcamento = Orcamento::findOrFail($id);
        $orcamento->delete();

        return redirect('/orcamento')->with('status', 'Solicitação excluida com sucesso!');
    }
}
