<?php

namespace App\Http\Controllers;

use App\Models\Plantas;
use App\Models\Productos;
use Illuminate\Http\Request;

class PlantasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plantas = Plantas::paginate(10); // Cambia '10' por el número de elementos que desees por página.
        return view('plantas.index', compact('plantas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Productos::all();
        return view('plantas.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'fecha_ingreso' => 'required|date',
            'importe' => 'required|integer',
            'activo' => 'required|boolean',
            'email' => 'required|email',
            'producto_id' => 'required|exists:productos,id'
        ]);

        Plantas::create($request->all());
        return redirect()->route('plantas.index')->with('success', 'Planta creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plantas $plantas)
    {
        return view('plantas.show', compact('plantas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plantas $planta)
    {
        $productos = Productos::all();
        return view('plantas.edit', compact('planta', 'productos'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plantas $planta)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'fecha_ingreso' => 'required|date',
            'importe' => 'required|integer',
            'activo' => 'required|boolean',
            'email' => 'required|email',
            'producto_id' => 'required|exists:productos,id'
        ]);

        $planta->update($request->all());

        return redirect()->route('plantas.index')->with('success', 'Se actualizo la planta de forma correcta');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plantas $planta)
    {
        $planta->delete();
        return redirect()->route('plantas.index')->with('success', 'La planta fue eliminada correctamente');
    }
}
