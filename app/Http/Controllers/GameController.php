<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * [index description]
     * @return [type] [description]
     */
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
