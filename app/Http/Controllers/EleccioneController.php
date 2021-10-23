<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eleccione;

class EleccioneController extends Controller
{
    public function index($value='')
    {
    	return view ('test');
    }
    public function get($value='')
    {
    	return $elecciones=Eleccione::join('estamentos','estamentos.id','=','estamento_id')
     	->join('departamentos','departamentos.id','=','departamento_id')
     	->join('categoria_electorals','categoria_electorals.id','=','categoria_electoral_id')
     	->select('estamentos.estamento as name','elecciones.cantidad as y')
     	->get();
    }
}
