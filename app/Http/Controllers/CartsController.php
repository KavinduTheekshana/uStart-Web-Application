<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use DB;

class CartsController extends Controller
{
    public function CreateCart(Request $request){

      $user_id = utf8_decode($request->userid);
      $user_type = utf8_decode($request->usertype);
      $product_id = utf8_decode($request->productid);
      $qty = utf8_decode($request->qty);

      $model = new Cart();
      $ProductIsAvailable =  $model->getProductIsAvailable($user_id,$product_id);

      if($ProductIsAvailable == "1"){
        $updateQty = $model->UpdateQty($user_id,$product_id,$qty);
      }else{
        $AddCartDate = $model->AddCartDate($user_id,$user_type,$product_id,$qty);
      }
  










      // $isAvailable = DB::table('carts')->where([['user_id',"=",$user_id],['user_type',"=",$user_type],['product_id',"=",$product_id],['availabeforcart',"=","1"]])->get();
      // $isAvailable = DB::table('carts')->where([['user_id',"=",$user_id],['user_type',"=",$user_type],['product_id',"=",$product_id],['availabeforcart',"=","1"]])->select('qty')->get();
      // if($isAvailable!=null){
      //   $newint = $isAvailable +5;
      //   var_dump($isAvailable);die();
      //   return $newint;

      // }

      //   if(isset($request->userid) && $request->userid!=""){
         
      //     $Cart = new Cart();
      //     $Cart->$user_id;
      //     $Cart->$user_type;
      //     $Cart->$product_id;
      //     $Cart->$qty;
      //     $Cart->save();



      //     $data=array(
      //       "code"=>1,
      //       "message"=>"Your Item Is Added to cart"
      //     );


      //   }else{
      //     $data=array(
      //       "code"=>0,
      //       "message"=>"error"
      //     );
          
      //   }
      //   return response()->json($data, 200);
      // }
}
}
