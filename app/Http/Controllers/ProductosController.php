<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::OrderBy('nombre', 'DESC')
        	->Where('categoria_id', 3)
        	->get();
        	
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
    	$categorias = Categoria::pluck('nombre', 'id')->all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
                'nombre' => 'required|unique:productos',
                'descripcion' => 'required',
                'precio' => 'required'
            ]
        );

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
    	$producto = Producto::find($id);
	    $categorias = Categoria::pluck('nombre', 'id')->all();
        return view('productos.edit', compact('categorias', 'producto'));
    }

    public function update(Request $request, $id){
    	$producto = Producto::find($id);
    	$producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
        return redirect()->route('productos.index');
    }
}
