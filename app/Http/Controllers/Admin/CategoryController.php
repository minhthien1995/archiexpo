<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Entities\Category;

class CategoryController extends BaseController
{
    public function getShowAll()
    {
    	$categories = Category::get();
    	return $categories;
    }
    public function getAdd()
    {
    	return view("form");
    }
    public function postAdd(Request $request)
    {
    	$categoryInput = $request->all();
    	$category = new Category($categoryInput);
    	$category->save();
    	return $category;
    }
    public function getShow($id)
    {
    	$category = Category::find($id);
    	return view("update",compact("category"));
    }
    public function getDelete($id)
    {
    	$category = Category::find($id);
    	if($category == null)
    		return response()->json(["status_code"=>400,"message"=>"Can not found id"]);
    	$category->delete();
    	return response()->json(["status_code"=>200,"message"=>"delete detail category success!!!"]);
    }
    public function postUpdate($id,Request $request)
    {
    	$category = Category::find($id);
    	$category->update($request->all());
    	return $category;
    }

}
