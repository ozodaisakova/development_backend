<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function products_of_controller(Request $request){
        if($request->category_id==null) $category_id=0; else  $category_id=$request->category_id;
        if($request->column==null) $column='id'; else $column=$request->column;
        if($request->order==null) $order='asc'; else $order=$request->order;
        if($request->per==null) $per=12; else $per=$request->per; 
        return response()->json(Product::where('category_id', $category_id)->orderBy($column, $order)->paginate($per),200);        
    } 


    public function index()
    {
        
    }

    public function create()
    {
              
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return response()->json("OK",201);       
    }

    public function show(Product $product)
    {
        
    }

    public function edit(Product $product)
    {
        
    }

    public function update(Request $request, Product $product)
    {
    
    }


    public function destroy(Product $product)
    {
        
    }
}
