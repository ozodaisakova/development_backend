<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function index()
    {
        return response()->json(['products' => Product::all()],200);
    }  

    public function products_of_catalog(Request $request){
        if($request->catalog_id==null) $catalog_id=0; else  $catalog_id=$request->catalog_id;
        if($request->column==null) $column='id'; else $column=$request->column;
        if($request->order==null) $order='asc'; else $order=$request->order;
        if($request->per==null) $per=12; else $per=$request->per; 
        return response()->json(Product::where('catalog_id', $catalog_id)->orderBy($column, $order)->paginate($per),200);        
    } 


    public function store(Request $request)
    {
        Product::create($request->all());
        return response()->json("OK",201);       
    }

    public function show($product)
    {
        $json=null;
        $json = Product::with('catalog')->where('id', $product)->get();
        if(count($json)!=0) return response()->json($json, 200);
        else return response()->json("Страница не найдена!", 404);
    }

    public function update(Request $request, Product $product)
    {
    
    }


    public function destroy(Product $product)
    {
        
    }
}
