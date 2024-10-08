<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    
    public function create()
    {
        return view('articulos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);

        Articulo::create($request->all());
        return redirect()->route('articulos.index')->with('success', 'articulo creado correctamente');
    }

    public function show(Articulo $articulo)
    {
        return view('articulos.show', compact('articulo'));
    }

    public function edit(Articulo $articulo)
    {
        return view('articulos.edit',compact('articulo'));
    }
            
    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $articulo->update($request->all());
        return redirect()->route('articulos.index')->with('success', 'Artículo actualizado correctamente.');
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->route('articulos.index')->with('success', 'Artículo eliminado correctamente.');
    }
}
