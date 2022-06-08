<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Celular;

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
        $celulares = Celular::orderBy('nome', 'ASC')->get();
        return view('celular.index', ['celulares' => $celulares]);
    }
    
    /*public function products()
    {
        $produtos = Produto::orderBy('nome', 'ASC')->get();
        return view('page.products', ['produtos' => $produtos]);
    }

    public function contacts()
    {
        return view('page.contacts');
    }
    
    public function about()
    {
        return view('page.about');
    }*/
}