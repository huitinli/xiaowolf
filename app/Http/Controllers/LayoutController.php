<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
	public static function header()
	{
		return view('layout.header');
	}
}
