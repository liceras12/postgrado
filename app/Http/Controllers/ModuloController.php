<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    
    public function index()
    {
        $modulos = Modulo::all();
        return view('modulos.index', compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:50',
            'estado' => 'required|max:1',
        ]);

        Modulo::create($validated);

        return redirect()->route('modulos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modulo $modulo)
    {
        return view('modulos.show', compact('modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modulo $modulo)
    {
        return view('modulos.edit', compact('modulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modulo $modulo)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:50',
            'estado' => 'required|max:1',
        ]);

        $modulo->update($validated);

        return redirect()->route('modulos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modulo $modulo)
    {
        $modulo->delete();
        return redirect()->route('modulos.index');
    }
}
