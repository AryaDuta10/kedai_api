<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuApiController extends Controller
{
 public function index(){
     $menus = Menu::all();
     return response()->json(['message' => 'Success','data' => $menus]);
 }

 public function show($id){
     $menu = Menu::find($id);
     return response()->json(['message' => 'Success' , 'data' => $menu]);

 }

 public function store(Request $request){
    $menu = Menu::create( $request->all());
    return response()->json(['message' => 'Insert Data Sukses' , 'data' => $menu]);
}

public function update(Request $request,$id){
    $menu= Menu::find($id);
    $menu->update($request->all());
    return response()->json(['message' => 'Edit Data Sukses' , 'data' => $menu]);
}


public function destroy($id){

    $menu = Menu::find($id);
    $menu->delete();
    return response()->json(['message' => 'Delete Data Sukses' , 'data' => null]);
}
}
