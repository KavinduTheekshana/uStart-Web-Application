<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\products;
use Auth;

class ProductController extends Controller
{
    public function addproduct(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $category = DB::table('categories')->get(); 
        return view('products/addproduct',['category'=>$category,'authprofile'=>$authprofile]);
      }

      public function saveproduct(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'category_id'=>['required'],
          'number_of_pcs' => ['required'],
          'product_price' => ['required'],
          'description' => ['required'],
         ]);
  
         $products = new products();
         $products->name = $request->input('name');
         $products->category_id = $request->input('category_id');
         $products->number_of_pcs = $request->input('number_of_pcs');
         $products->product_price = $request->input('product_price');
         $products->status = '1';
         $products->description = $request->input('description');

         if ($request->hasFile('product_image')) {
              $image = $request->file('product_image') ;
              $destinationPath = 'uploads/products/'; // upload path
              $product_image = 'uploads/products/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move($destinationPath, $product_image);
              $products->product_image = "$product_image";
          }else {
              $products->product_image = 'uploads/products/default.jpg';
          } 
         $products->save();
         return redirect('addproduct')->with('status', 'New Product Added Sucessfully');
      }

      public function manageproduct(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $products = DB::table('products')->get(); 
        return view('products/manageproduct',['products'=>$products,'authprofile'=>$authprofile]);
      }




      public function getProductList(){
        $JsonArray=[];
 
            $JsonArray = DB::table('products')->orderBy('name', 'asc')->get();  
                
        return json_encode($JsonArray);
    }


    
    

}
