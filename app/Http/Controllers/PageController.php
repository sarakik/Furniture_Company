<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
 public function index()
	{
		return view('index');	
	}
	public function catalogue()
	{
		return view('catalogue');	
	}
	public function pricing()
	{
		return view('pricing');	
	}
	public function contacts()
	{
		return view('contacts');	
	}
	public function services()
	{
		return view('services');	
	}}
