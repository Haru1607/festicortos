<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;


class autores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $autores = Autor::get();
        return view('listadoautores', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('nuevoautor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $autor = new Autor();
        $autor->nombre = $request->get('nombre');
        $autor->nacimiento = $request->get('nacimiento');
        $autor->save();
        return redirect()->route('autores.index'); //Redireccionar al listado.
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
        //
        $autor = Autor::findOrFail($id);
        return view('modificarautor',compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $autorModificar = Autor::findOrFail($id);  
        $autorModificar->nombre = $request->get('nombre');
        $autorModificar->nacimiento = $request->get('nacimiento');
        $autorModificar->save();
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Autor::findOrFail($id)->delete();
        return redirect()->route('autores.index');
    }
}
