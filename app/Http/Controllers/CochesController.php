<?php

namespace App\Http\Controllers;
use App\Models\coches;
use Illuminate\Http\Request;


class CochesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coches = Coches::all();
        return view('index', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function mostrarCoche(string $matricula)
    {
        $coches = Coches::where('matricula', $matricula)->firstOrFail();
        return view('mostrarCoche', compact('coches'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('crearCoche');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'matricula' => 'required|unique:coches,matricula|max:10',
            'modelo' => 'required|max:255',
            'color' => 'required|max:50',
        ]);

        // Crear un nuevo coche
        $coche = new Coches();
        $coche->matricula = $request->matricula;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color;

        // Guardar el coche en la base de datos
        $coche->save();

        // Redireccionar a la página de detalles del coche

        return redirect()->route('coches.index')
            ->with('success', 'Coche creado exitosamente.');

    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $matricula)
    {
        $coche = Coches::where('matricula', $matricula)->firstOrFail();
        return view('editarCoche', compact('coche'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $matricula)
    {
        $coche = Coches::where('matricula', $matricula)->firstOrFail();

        $request->validate([
            'modelo' => 'required|max:255',
            'color' => 'required|max:50',
        ]);

        $coche->modelo = $request->modelo;
        $coche->color = $request->color;
        $coche->save();

        return redirect()->route('coches.index')
            ->with('success', 'Coche actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $matricula)
    {
        $coche = Coches::where('matricula', $matricula)->firstOrFail();
        $coche->delete();
        return redirect()->route('coches.index')->with('success', 'Coche eliminado exitosamente.');
    }


}
