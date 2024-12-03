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
        return view('subir.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(subir $subir)
    {
        return view('subir.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subir $subir)
    {
        return view('subir.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subir $subir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subir $subir)
    {
        //
    }
}
