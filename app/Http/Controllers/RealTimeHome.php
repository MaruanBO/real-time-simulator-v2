<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealTimeHome extends Controller
{
   	public function getIndex(){

		return view('index');
	}
}
