<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
    public function __construct(){

    }

    public function index(Request $requests){
        if ($requests){
            $query = trim($requests->get('searchText'));
            $categorias=DB::table('categoria')->where('Nomrbe','LIKE','%'.$query.'%')->where('Condicion','=','1')->orderBy('idCategoria','desc')->paginate(7);
            return view('almacen.categoria.index',["Categorias"=>$categorias]);
        }
    }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
