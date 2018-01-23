<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
    	if(view()->exists('index'))
    	{
    		$data = [
    			'title' => 'Игры'
    		];

    		return view('index', $data);
    	}else abort(404);
    }
}
