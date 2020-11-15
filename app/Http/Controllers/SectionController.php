<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
class SectionController extends Controller
{
   public function add(){
    	return view('admin.sections.add');
    }
    public function store(Request $Request){
       $section = new Section;
       $section->name = $Request->name;
       $section->save(); 
    	return back();
    }
    public function all(){
       $sections = Section::all();
       //return $sections;
    	return view('admin.sections.all', compact('sections'));
    }
    public function edit($id){
       $section= Section::where('id','=',$id)->first();
      return view('admin.sections.edit', compact('section'));
    }
     public function update($id,Request $Request){
       $section = Section::find($id);
       $section->name = $Request->name;
       $section->save(); 
      return redirect('/sections/all');
     }
     public function delete($id){
      $section = Section::find($id);
      $section->delete();
      return redirect('/sections/all');
     }
}
