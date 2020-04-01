<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    function getProductIsAvailable($user_id,$product_id){
        $data = Cart::where('user_id', $user_id)->where('product_id', $product_id)->where('availabeforcart', 1)->first();
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

    function OrderNowMobile($uid){
        $data =Cart::where('user_id', $uid)->update(['availabeforpublic' => 1,'availabeforcart' => 0]);
        return $data;
    }

    function SingleCustomerOrderdItems($customerid){
        // $data =Cart::where('user_id', $customerid)->where('user_type', 2)->get();
        // $data =Cart::where('user_id', $customerid)
        //         ->groupBy('id','user_id','user_type','product_id','qty','availabeforcart','availabeforpublic','status','created_at','updated_at')
        //         ->sum('qty');

        // $data = DB::select(DB::raw("select * from (
        //     SELECT user_id,product_id,SUM(qty) as qty FROM carts WHERE user_id=\"{$customerid}\" GROUP BY product_id,user_id
        //         ) as sub"));

        $data = DB::select(DB::raw("select * from (
            SELECT products.name,products.product_price,SUM(carts.qty) as qty,products.product_image FROM carts INNER JOIN products ON carts.product_id=products.id
             WHERE carts.user_id=\"{$customerid}\" GROUP BY carts.product_id,products.name,products.product_price,products.product_image
                ) as sub"));
        return $data;


    }
   
}
