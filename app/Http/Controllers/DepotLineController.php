<?php

namespace App\Http\Controllers;

use App\Models\DepotLine;
use Illuminate\Http\Request;

class DepotLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depotLines = DepotLine::all();
        return view('depot.depotLine.index', compact('depotLines'));
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
     * @param  \App\Models\DepotLine  $depotLine
     * @return \Illuminate\Http\Response
     */
    public function show(DepotLine $depotLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepotLine  $depotLine
     * @return \Illuminate\Http\Response
     */
    public function edit(DepotLine $depotLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DepotLine  $depotLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepotLine $depotLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepotLine  $depotLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepotLine $depotLine)
    {
        //
    }
}
