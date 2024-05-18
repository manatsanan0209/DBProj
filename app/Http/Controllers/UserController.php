<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    function getfollows(Request $req)
    {
        $data = [
            "order_id" => $req->order_id,
        ];
        $order_info = DB::table("orders")->where('order_id', $data['order_id'])->first();
        $product_info = DB::table("products")->where('order_id', $data['order_id'])->get();
        // dd($order_info, $product_info);
        return redirect()->route('follow')->with('order_info', $order_info)->with('product_info', $product_info);
    }

    function insert(Request $req)
    {
        $data = [
            "order_id" => $req->order_id,
            "employee_id" => $req->employee_id,
            "product_type" => $req->product_type,
            "product_description" => $req->product_description,
            "product_stock_id" => $req->product_stock_id,
            "product_status" => $req->product_status,
        ];
        DB::table('products')->insert($data);
        return redirect()->route('follow');
    }
}

