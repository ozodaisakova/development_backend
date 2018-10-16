<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    
    public function index()
    {
         return response()->json(['categories' => Category::with('children')->where('parent_id','0')->get()],200);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return response()->json("OK",201);
    }

    public function show(Category $category)
    {
        return response()->json($category);  
    }

    public function edit(Category $category)
    {
        
    }

    public function update(Request $request, Category $category)
    {
        
    }

    public function destroy(Category $category)
    {
        
    }
}
