<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use DB;
use Auth;

class CategoryController extends Controller
{
    public function category(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $category = DB::table('categories')->get(); 
        return view('category/category',['category'=>$category,'authprofile'=>$authprofile]);
      }


    public function addcategory(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255']
         ]);
  
         $Categorie = new Categories();
         $Categorie->name = $request->input('name'); 
         $Categorie->save();
         return redirect('category')->with('status', 'New Category is Added Sucessfully');
      }

      public function editcategory(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255']
         ]);
         $Categorie = new Categories();
         $Categorie_id=$request->input('Categorie_id');
         $Categorie->name = $request->input('name'); 

         $data=array(
            'name' => $Categorie->name,
          );
        

        Categories::where('id',$Categorie_id)->update($data);
         $Categorie->update();
         return redirect('category')->with('statuscategoryupdate', 'Category is Update Sucessfully');
      }

      public function category_diactivate($id){
        $task=Categories::find($id);
        $task->status=false;
        $task->save();
       return redirect()->back()->with('Categories_diactivate_status', 'Category Was Diactivated Sucessfully');
      }

      public function category_activate($id){
        $task=Categories::find($id);
        $task->status=true;
        $task->save();
       return redirect()->back()->with('Categories_activate_status', 'Category Was Activated Sucessfully');;
      }
}
