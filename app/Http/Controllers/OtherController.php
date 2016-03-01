<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OtherController extends Controller
{
	public function index() {
		$obj = new \stdClass();
    	$obj->firstName = "Clay";
    	$obj->lastName = "Ewing";

	    return view('frontend.hello', ["obj" => $obj]);
	}
}
