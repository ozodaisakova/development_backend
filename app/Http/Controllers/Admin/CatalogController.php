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

    public function update(Request $request, Catalog $catalog)
    {
        if($request->name=='') return response()->json("Поле <имя каталога> не заполнено",400);
        else if($request->icon=='') return response()->json("Поле <иконка каталога> не заполнено",400);
        else if($request->hidden=='') return response()->json("Значение <видимость каталога> не выбрано",400);
        $catalog_id = $request->id;
        $catalog = Catalog::find($catalog_id);
        if($catalog){
            return response()->json("Каталог с такой ID не существует!",400);
        }else{
            return response()->json("Пока все нормально", 200);
        }
       
    }

    public function destroy(Catalog $catalog)
    {
        
    }
}
