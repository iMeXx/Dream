<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCAController extends Controller
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
    	if(view()->exists('pca'))
    	{
    		$data = [
    			'title' => 'Кибер Арена'
    		];

    		return view('pca', $data);
    	}else abort(404);
    }
}
