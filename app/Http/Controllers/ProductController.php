<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use db to connect
use Illuminate\Support\Facades\DB; 

//use models to connect to db
use App\Models\Product;

//validator class
use Validator;

class ProductController extends Controller
{
    //
        function add(Request $req) {
            //Multiple DB connection using DB inbuilt
            // return DB::connection('mysql2')->table('products')->get();

            //Using Models 
            //return Product::all();
            $product = new Product;
            $product->name = $req->name;
            $result = $product->save();
            if ($result) {
                return ['Results' => 'Data has been saved'];
            } else {
                return ['Results' => 'Failed'];
            } 
        }

        function update(Request $req) {
            $product = Product::find($req->id);
            $product->name = $req->name;
            $result = $product->save();
            if ($result) {
                return ['Results' => 'Data updated'];
            } else {
                return ['Results' => 'Failed'];
            }
            
        }

        function delete($id) {
            $product = Product::find($id);
            $result = $product->delete();
            if($result) {
                return ['Results' => 'Data deleted'];
            } else {
                return ['Results' => 'Failed'];
            }
        }

        function search($name) {
            $result = Product::where("name","like", "%" . $name . "%")->get();
            if(count($result)) {
                return $result;
            } else {
                return ["Results" => "Data not found!"];
            }
        }

        function testData(Request $req) {
            $rules = array(
                "name" => "required | min:2|max:5"
            );

            $validator = Validator::make($req->all(), $rules);
            if($validator->fails()) {
                return response()->json($validator->errors(), 401);
            } else {
                $product = new Product;
                $product->name = $req->name;
                $result = $product->save();

                if ($result){
                    return ["result" => "Data entered Sucessfully"];
                }else {
                    return ["results" => 'Data failed to save in db'];
                }
                
            }
            
        }
}
