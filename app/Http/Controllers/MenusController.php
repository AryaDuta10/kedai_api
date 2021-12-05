<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenusController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('menus.index',compact(['menus']));
    }

    public function create(){
        return view('menus.create');
    }

    public function store(Request $request){
        Menu::create( $request->all());
        return redirect('/menus');
    }

    public function edit($id){
        $menu = Menu::find($id);
        return view('menus.edit',compact(['menu']));
    }

    public function update(Request $request,$id){
        $menu= Menu::find($id);
        $menu->update($request->all());
        return redirect('/menus');
    }

    public function destroy($id){

        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/menus');
    }
}

