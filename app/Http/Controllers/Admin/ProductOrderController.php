<?php

namespace App\Http\Controllers\Admin;

use App\ProductOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ProductOrderController extends Controller
{
    public function all(){
        return response()->json(ProductOrder::all(), 200);
    }
    
    public function store(Request $r){
        if(!$r['product_id'] || !$r['product_count'] || !$r['product_color'] || !$r['user_id'] ||!$r['user_name'] || !$r['user_surname'] || !$r['user_email'] ||!$r['user_adress'] ) 
            return response()->json("Некоторые поля не заполнены. Пожайлуйста, проверьте данные еще раз",400);
        else{
            ProductOrder::create($r->all());
            return response()->json('Данные успешно сохранены',200);
        }

    }
}
