<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;



class TiendaController extends Controller
{
    //

    //Obtener todos las tiendas
    public function get(){
        return response()->json(Tienda::get());
    }

    //crear una nueva tienda
    public function create(Request $request){
        $Tienda = new Tienda();
        $Tienda->nombre = $request->input('nombre');
        $Tienda->fecha_apertura = $request->input('fecha_apertura');
        $Tienda->save();
        return response()->json($Tienda);
    }

    //Actualizar una tienda
    public function put(Request $request,$id){
        $Tienda = Tienda::get($id);
        $Tienda->nombre = $request->input('nombre');
        $Tienda->fecha_apertura = $request->input('fecha_apertura');
        $Tienda->save();
        return response()->json($Tienda);

    }

    //Eliminar una tienda
    public function delete($id){
        return response()->json(Tienda::destroy($id));
    }


    //obtener todos los productos de una tienda
    function getProductos($id){
        $productos = Tienda::find($id)->productos; 
        return response()->json($productos);
    }

}
