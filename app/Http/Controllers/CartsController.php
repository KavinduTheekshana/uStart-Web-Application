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
  }


  public function getCartItemList(Request $request){

    $user_id = utf8_decode($request->uid);

    $GetDetailsForMobilecart = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->select('carts.id as id','products.name as title','products.product_price as price','carts.qty as qty','products.product_image as image')
            ->get();

  
            return $GetDetailsForMobilecart;
}


public function DeleteCartItem(Request $request){

  $cartId = utf8_decode($request->cartid);

  $model = new Cart();
  $deleteCartItem = $model->DeleteCartItem($cartId);
  return $deleteCartItem;

  }

}
