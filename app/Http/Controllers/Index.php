<?php
namespace App\Http\Controllers;
class Index extends Controller{
	public function getIndex(){
		return view('welcome');
	}
}