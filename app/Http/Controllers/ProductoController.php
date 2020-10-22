<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //Obtener todos los productos
    public function get(){
        return response()->json(Producto::get());
    }

    //crear un nuevo producto
    public function create(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->SKU = $request->input('SKU');
        $producto->descripcion = $request->input('descripcion');
        $producto->valor = $request->input('valor');
        $producto->tienda_id = $request->input('tienda_id');
        $producto->save();
        return response()->json($producto);
    }

    //Actualizar un producto
    public function put(Request $request,$id){
        $producto = Producto::get($id);
        $producto->nombre = $request->input('nombre');
        $producto->SKU = $request->input('SKU');
        $producto->descripcion = $request->input('descripcion');
        $producto->valor = $request->input('valor');
        $producto->tienda_id = $request->input('tienda_id');
        $producto->save();
        return response()->json($producto);

    }

    //Eliminar un producto
    public function delete($id){
        return response()->json(Producto::destroy($id));
    }

    
   
}
