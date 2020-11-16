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
	public function elements()
	{
		return view('elements');	
	}
	public function elements2()
	{
		return view('elements2');	
	}
	
}
