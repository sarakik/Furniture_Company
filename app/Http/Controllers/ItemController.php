<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Items;
use App\Section;
use App\Option;
class ItemController extends Controller
{
public function add(){
      $sections = Section::all();
      $options = Option::all();
    	return view('admin.items.add', compact('sections'),compact('options'));
    }
    public function store(Request $Request){
       $item = new Items;
       $item->name = $Request->name;
       $item->option_id = $Request->option_id;

        //image 
      if(isset($Request->image)){
       $image_name = rand(). '.' .$Request->image->getClientOriginalExtension();
       $item->image = $image_name;
        $Request->image->move('upload', $image_name);

       }
       $item->description = $Request->description;
       $item->price = $Request->price;
       $item->section_id = $Request->section_id;

       $item->save();
 
    	return back();
    }
    public function all(){
       $items = Items::all();
       //return $items;
    	return view('admin.items.all', compact('items'));
    }
    public function edit($id){
       $item= Items::where('id','=',$id)->first();
      return view('admin.items.edit', compact('item'));
    }
     public function update($id,Request $Request){
       $item = Items::find($id);
       $item->name = $Request->name;
       $item->save(); 
      return redirect('/items/all');
     }
     public function delete($id){
      $item = Items::find($id);
      $item->delete();
      return redirect('/items/all');
     }
}
