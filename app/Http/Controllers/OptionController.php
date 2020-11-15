<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Option;
class OptionController extends Controller
{
     public function add(){
    	return view('admin.options.add');
    }
    public function store(Request $Request){
       $option = new Option;
       $option->name = $Request->name;
       $option->save(); 
    	return back();
    }
     public function all(){
       $options = Option::all();
       //return $options;
      return view('admin.options.all', compact('options'));
    }
    public function edit($id){
       $option= Option::where('id','=',$id)->first();
      return view('admin.options.edit', compact('option'));
    }
     public function update($id,Request $Request){
       $option = Option::find($id);
       $option->name = $Request->name;
       $option->save(); 
      return redirect('/options/all');
     }
     public function delete($id){
      $option = Option::find($id);
      $option->delete();
      return redirect('/options/all');
     }
}
