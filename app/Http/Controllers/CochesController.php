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
        return redirect()->to('/coches/' . $coche->matricula)
            ->with('success', 'Coche creado exitosamente.');
    }



    /**
     * Display the specified resource.
     */
    public function show(coches $coches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coches $coches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coches $coches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coches $coches)
    {
        //
    }
}
