<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    function getProductIsAvailable($user_id,$product_id){
        $data = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();
        if($data != null){
            return "1";
        }else{
            return "0";
        }
    }

    function UpdateQty($user_id,$product_id,$qty){
        $data =Cart::where('user_id', $user_id)->where('product_id', $product_id)->increment('qty',$qty);
        return $data;
    }

    function AddCartDate($user_id,$user_type,$product_id,$qty){
        $data = array(
            'user_id' => $user_id,
            'user_type' => $user_type,
            'product_id' => $product_id,
            'qty' => $qty

        );
        $id = Cart::insertGetId(
            $data
        );
        return $id;
    }

    function GetDetailsForMobilecart($user_id){
        $date = Cart::where('user_id', $user_id)->get();
        return $date;
    }

    function DeleteCartItem($cartId){
        $delete = Cart::where('id', $cartId)->delete();
        return $delete;
    }
   
}
