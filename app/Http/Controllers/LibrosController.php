<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;


class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $libros = Libro::get();
    return view('listado', compact('libros'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $autores = Autor::get(); //para cargar los autores en el desplegable
        return view('nuevolibro', compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = new Libro();
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->precio = $request->get('precio');
        $libro->save();
        return redirect()->route('listado'); //Redireccionar al listado.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $libro = Libro::findOrFail($id);
        $autores = Autor::get(); //para cargar los autores en el desplegable
        return view('modificar',compact('id','libro','autores'));

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $libroAModificar = Libro::findOrFail($request->get('id'));
        $libroAModificar->titulo = $request->get('titulo');
        $libroAModificar->editorial = $request->get('editorial');
        $libroAModificar->precio = $request->get('precio');
        $libroAModificar->update();
        return redirect()->route('listado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        Libro::findOrFail($id)->delete();
        $libros = Libro::get();
        return view('listado',compact('libros'));
        //
    }
}
