<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    
    public function index()
    {
        $vehiculos=Vehiculo::getVehiculos();
      
        return view('vehiculos.vehiculoIndex', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculos.vehiculoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa'=>'required|string|max:10',
            'tipo_id'=>'required',
            'propietario' => 'required|string|max:100',
            'observaciones' => 'nullable|string|max:255',
        ]);
        Vehiculo::crearVehiculo($request->all());
        return redirect()->route('vehiculos.index')
            ->with('success','Vehiculo registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        //
    }
}
