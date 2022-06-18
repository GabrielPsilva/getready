<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Templates;

class PageController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        /*$celulares = Celular::orderBy('nome', 'ASC')->get();
        return view('index', ['celulares' => $celulares]);*/
        return view('page.index');
    }
    
    /*public function products()
    {
        $produtos = Produto::orderBy('nome', 'ASC')->get();
        return view('page.products', ['produtos' => $produtos]);
    }*/

    public function contact()
    {
        return view('page.contact');
    }
    
    public function about()
    {
        return view('page.about');
    }

    public function advices()
    {
        return view('page.advices');
    }
}