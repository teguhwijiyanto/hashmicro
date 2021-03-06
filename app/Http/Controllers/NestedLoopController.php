<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;


class NestedLoopController extends Controller
{
    public function index()
    {
		return view('nested_loop.create');
    }

    public function create()
    {
        return view('nested_loop.create');
    }

    public function store(Request $request)
    {
		$request->validate([
          'input_1' => 'required|integer'
		]);
	  
        $input_1 = $request->input('input_1');
		
		$str_tree = "";

		for ($i = 1; $i < $input_1; $i++) {
			for ($j = $i; $j <= $input_1; $j++) {
				$str_tree .= "&nbsp;";
			}
			for ($j = 1; $j <= $i; $j++) {
				$str_tree .= " * ";
			}
			$str_tree .= '<br />';
		}

		return view('nested_loop.index')
			->with('input_1', $input_1)
			->with('str_tree', $str_tree)
			;
			
    }

}
