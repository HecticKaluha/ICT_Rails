<?php

namespace App\Http\Controllers;

use App\Models\VehicleClass;
use Illuminate\Http\Request;

class VehicleClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleClasses = VehicleClass::all();
        return view('vehicle.vehicleClass.index', compact('vehicleClasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleClass $vehicleClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleClass $vehicleClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleClass $vehicleClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleClass $vehicleClass)
    {
        //
    }
}
