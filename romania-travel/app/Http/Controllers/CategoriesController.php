<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoriesController extends Controller
{

    function  index(){
       $data =Category::all();
       return view('view-categories',['categories'=>$data]);

   }

   function store(request $req)
   {
     $category = new category();
    $category->name = $req->categoryName;
    $category->save();
    return back()->withInput();
}

function destroy($id){
    $data = Category::find($id);
    $data->delete();
    return back()->withInput();
}




}
