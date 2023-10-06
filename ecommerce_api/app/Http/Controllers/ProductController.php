<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductController extends Controller
{
    public function index() {
        /* MENGGUNAKAN MODEL */
        $products = Product::all();
        return response()->json([
            "data" => $products
        ]);
        /* PAGINATE SQL */
        // $data = DB::table("products")->paginate(5);
        // return response() -> json([$data]);

        /* AMBIL SEMUA DATA */
        // $products = DB::table("products")->get();
        // return response() -> json([
        //     "data" => $products
        // ]);

        /* TANPA SQL */
        // return ["Teh gelas", "Sabun colek", "Garam krosok"];
        // return response()->json([
        //     "data" =>  ["Teh gelas", "Sabun colek", "Garam krosok"]
        // ]);
    }

    public function create(Request $request) {
        $input = request()->all();
        
        $result = DB::table("products")->insert([
            "photo" => $input["photo"],
            "product_name" => $input["product_name"],
            "price" => $input["price"],
            "description" => $input["description"],
            "category" => $input["category"]
        ]);

        return response()-> json(["data"=>[
            "result" => $result,
            "message" => "OK"
        ]]);
    }


    public function update(Request $request, $id) {
        $input = request()->all();
        $result = DB::table("products")
            -> where("id", $id)
            ->update([
                "photo" => $input["photo"],
                "product_name" => $input["product_name"],
                "price" => $input["price"],
                "description" => $input["description"],
                "category" => $input["category"]
        ]);

        return response()-> json(["data"=>[
            "result" => $result,
        ]]);
    }

    public function delete($id) {
        $result = DB::table("products")
            -> where("id", $id)
            -> delete();

        return response()-> json(["data"=>[
            "result" => $result,
        ]]);
    }
}
