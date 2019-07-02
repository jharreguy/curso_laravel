<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
                'nombre' => 'required|unique:categorias',
                'descripcion' => 'required'
            ]
        );
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/categorias/');
                $request->file('imagen')->move($path, $file->getClientOriginalName());
                $categoria->imagen = 'img/categorias/'  . $file->getClientOriginalName();
            }
        }

        $categoria->save();
        
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Categoria::find($id);

        //return view('categora.show', compact($cat));
        return $cat;
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));

    }

    public function update(Request $request, $id)
    {

        $categoria = Categoria::find($id); 
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/categorias/');
                $request->file('imagen')->move($path, $file->getClientOriginalName());
                $categoria->imagen = 'img/categorias/'  . $file->getClientOriginalName();
            }
        }

        $categoria->update();
        return redirect()->route('categorias.index');
    }

    public function eliminar($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }

    public function busqueda(Request $request){
        $texto = $request->texto;

        $categorias = Categoria::Where('nombre', 'like', '%' .$texto . '%')->get();
        return view('categorias.index', compact('categorias'));
    }

    public function borradas()
    {
        $categorias = Categoria::onlyTrashed()->get();
        return view('categorias.borradas', compact('categorias'));
    }

    public function restaurar($id)
    {
        $categoria = Categoria::onlyTrashed()->find($id)->restore();
        return redirect()->route('categorias.index');
    }

    public function galeria()
    {
        $categorias = Categoria::all();
        return view('categorias.galeria', compact('categorias'));
    }
}
