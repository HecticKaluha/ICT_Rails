<?php

namespace App\Http\Controllers;

use App\Models\DepotLineCategory;
use Illuminate\Http\Request;

class DepotLineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depotLineCategories = DepotLineCategory::all();
        return view('depot.depotLineCategory.index', compact('depotLineCategories'));
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
     * @param  \App\Models\DepotLineCategory  $depotLineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DepotLineCategory $depotLineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepotLineCategory  $depotLineCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DepotLineCategory $depotLineCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DepotLineCategory  $depotLineCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepotLineCategory $depotLineCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepotLineCategory  $depotLineCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepotLineCategory $depotLineCategory)
    {
        //
    }
}
