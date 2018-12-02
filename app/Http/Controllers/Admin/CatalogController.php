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
        $this->validate($request, [
            'icon' => 'required',
            'name' => 'required',
            'hidden' => 'required|alpha_num',
        ]);
        Catalog::create($request->all());
        return response()->json("Введенные вами данные успешно сохранено",201);
    }

    
    public function show(Catalog $catalog)
    {
        return response()->json($catalog, 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'name' => 'required',
            'hidden' => 'required|alpha_num'
        ]);
        $catalog_id = $request->id;
        $catalog = Catalog::find($catalog_id);
        if(!$catalog){
            return response()->json("Каталог с такой ID не существует!",400);
        }else{
            $name = $request->name;
            $icon = $request->icon;
            $hidden = $request->hidden;
            $catalog->name = $name;
            $catalog->icon = $icon;
            $catalog->hidden = $hidden;
            if($catalog->save()) return response()->json("Данные обновлены", 200);   
            else  return response()->json($catalog, 400);
        }
       
    }

    public function destroy(Catalog $catalog)
    {
        // return response()->json("Данные удалены", 200);
       if($catalog->delete()) return response()->json("Данные удалены", 200);
       else return response()->json('Данные не правильно заполнены!', 422);
    }
}
