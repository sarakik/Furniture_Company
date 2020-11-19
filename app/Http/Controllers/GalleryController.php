<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Items;
class GalleryController extends Controller
{
    public function add(){
    	return view('admin.galleries.add');
    }
    public function store(Request $Request){
       $gallery = new Gallery;
       
       $gallery->item_id = $Request->item_id;
       if(isset($request->name)){
       $image_name = rand().time(). '.' .$request->name->getClientOriginalExtension();
       $gallery->name = $image_name;
       $request->name->move('upload', $image_name);
     }
       $gallery->save(); 
    	return back();
    }
    public function all(){
       $galleries = Gallery::all();
       //return $gallery;
    	return view('admin.galleries.all', compact('galleries'));
    }
    public function edit($id){
       $gallery= Gallery::where('id','=',$id)->first();
      return view('admin.galleries.edit', compact('gallery'));
    }
     public function update($id,Request $Request){
       $gallery = Gallery::find($id);
       $gallery->name = $Request->name;
       $gallery->save(); 
      return redirect('/galleries/all');
     }
     public function delete($id){
      $gallery = Gallery::find($id);
      $gallery->delete();
      return redirect('/galleries/all');
     }
}
