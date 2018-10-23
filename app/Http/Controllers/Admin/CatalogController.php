<?php

namespace App\Http\Controllers\Admin;

use App\Catalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function index()
    {
        return response()->json(['catalogs' => Catalog::all()],200);
    }

    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        if($request->name==null) return response()->json("Поле <имя каталога> не заполнено",400);
        if($request->icon==null) return response()->json("Поле <иконка каталога> не заполнено",400);
        Catalog::create($request->all());
        return response()->json("Введенные вами данные успешно сохранено",201);
    }

    
    public function show(Catalog $catalog)
    {
        return response()->json($catalog, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $catalog)
    {
        //
    }
}
