<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Entities\Menu;

class MenuController extends BaseController
{
    public function getShowAll()
    {
    	$data = Menu::get();
    	return $data;
    }
    public function getAdd()
    {
    	return view("form");
    }
    public function postAdd(Request $request)
    {
    	$categoryInput = $request->all();
    	$data = new Menu($categoryInput);
    	$data->save();
    	return $data;
    }
    public function getShow($id)
    {
    	$data = Menu::find($id);
        if($data == null)
            return response()->json(["status_code"=>400,"message"=>"Can not found id"]);
    	return view("update",compact("data"));
    }
    public function getDelete($id)
    {
    	$data = Menu::find($id);
    	if($data == null)
    		return response()->json(["status_code"=>400,"message"=>"Can not found id"]);
    	$data->delete();
    	return response()->json(["status_code"=>200,"message"=>"delete detail menu success!!!"]);
    }
    public function postUpdate($id,Request $request)
    {
    	$data = Menu::find($id);
    	$data->update($request->all());
    	return $data;
    }

}
