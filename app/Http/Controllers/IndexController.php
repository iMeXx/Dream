<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	if(view()->exists('index'))
    	{
    		$data = [
    			'title' => 'Главная'
    		];

    		return view('index', $data);
    	}else abort(404);
    }
}
