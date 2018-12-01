<?php

namespace App\Http\Controllers\Admin;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    
    public function index()
    {
        return response()->json(['informations' => Information::all()], 200);       
    }

    public function store(Request $request)
    {
        
    }

    public function show(Information $information)
    {
        
    }
    
    public function update(Request $request, Information $information)
    {
        
    }

    public function destroy(Information $information)
    {
        
    }
}
