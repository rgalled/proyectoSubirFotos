<?php

namespace App\Http\Controllers;

use App\Models\subir;
use Illuminate\Http\Request;

class SubirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subir = subir::all();
        if ($subir->isEmpty()) {
            return redirect()->route('subir.create');
        }
        return view('subir.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subir.create');
    }

    public function table()
    {
        $subir = subir::all();
        return view('subir.table', compact('subir'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subidos.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación: solo imágenes
        ]);
        foreach ($request->file('subidos') as $subir) {
            $nombreOriginal = $subir->getClientOriginalName();
            $nombre = date('H_i') . date('d_m_Y') . $nombreOriginal;
            $ruta = $subir->storeAs('archivos', $nombre, 'private');
            subir::create([
                'nombre_original' => $nombreOriginal,
                'nombre' => $nombre,
                'ruta' => $ruta,
            ]);
        }
        return back()->with('success', 'files uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(subir $subir)
    {
        $ruta = storage_path('app/private/subidos/' . $subir->ruta);
        return response()->file($ruta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subir $subir)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subir $subir)
    {
        //
    }

    public function img($id)
    {
        $subir = subir::findOrFail($id);
        $ruta = storage_path('app/private/subidos' . $subir->ruta);
        return response()->file($ruta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subir $subir)
    {

    }
}
