<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use DB;
use Auth;

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
            ->where('carts.availabeforcart', 1)
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

  public function OrderNowMobile(Request $request){

    $uid = utf8_decode($request->uid);
    $model = new Cart();
    $markaspublic = $model->OrderNowMobile($uid);
    return $markaspublic;
  
    }

    public function SingleCustomerOrderdItems(Request $request){

      $customerid = utf8_decode($request->customerid);
      $model = new Cart();
      $singlecustomerorders = $model->SingleCustomerOrderdItems($customerid);
      return $singlecustomerorders;
    
      }



      public function MarkOrderItemIsComplete(Request $request){

        $productid = utf8_decode($request->productid);
        $model = new Cart();
        $MarkAsComplete = $model->MarkAsComplete($productid);
        return $MarkAsComplete;
      
        }



        public function cart(){
          $id =Auth::user()->id;
          $authprofile = DB::table('users')->where(['id'=>$id])->first();
          $reps = DB::table('users')->where(['user_type'=>1])->get();
          return view('cart/cart',['reps'=>$reps,'authprofile'=>$authprofile]);
        }

        public function cartitem($ids){
          $id =Auth::user()->id;
          $authprofile = DB::table('users')->where(['id'=>$id])->first();
          $orders = DB::select(DB::raw("select * from (
            SELECT carts.product_id,products.name,products.product_price,SUM(carts.qty) as qty,products.product_image,users.profile_pic as userProfileImage
            FROM carts INNER JOIN products ON carts.product_id=products.id INNER JOIN users ON carts.user_id=users.id
             WHERE carts.user_id=\"{$ids}\" AND carts.status = 0 AND carts.availabeforpublic = 1
             GROUP BY carts.product_id,products.name,products.product_price,products.product_image,carts.status,carts.availabeforpublic,users.profile_pic
                ) as sub"));

                // return $orders;
          return view('cart/cartitem',['orders'=>$orders,'authprofile'=>$authprofile]);
        }

        public function MarkCartItemIsComplete($productid){

          $model = new Cart();
          $MarkAsComplete = $model->MarkAsComplete($productid);
          return redirect()->back()->with('status', 'New User Added Sucessfully');
        
          }

}
