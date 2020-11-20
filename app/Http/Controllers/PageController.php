<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
	{
		return view('index');	
	}
	public function about()
	{
		return view('about');	
	}

	public function catalog()
	{
		return view('catalog');	
	}
	public function blog_home()
	{
		return view('blog_home');	
	}
	public function contact()
	{
		return view('contact');	
	}
	public function bed_room()
	{
		return view('bed_room');	
	}
	public function living_room()
	{
		return view('living_room');	
	}
	public function sofa()
	{
		return view('sofa');	
	}
	public function kitchen()
	{
		return view('kitchen');	
	}
	
}
