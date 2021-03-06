<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;


class MathematicController extends Controller
{
    public function index()
    {
		return view('mathematic.create');
    }

    public function create()
    {
        return view('mathematic.create');
    }

    public function store(Request $request)
    {
		$request->validate([
          'input_1' => 'required|integer',
          'input_2' => 'required|integer',
		]);
	  
        $input_1 = $request->input('input_1');
		$input_2 = $request->input('input_2');
		$input_symbol = $request->input('input_symbol');
		
		if($input_symbol == "+") { $result = $input_1 + $input_2; }
		elseif($input_symbol == "-") { $result = $input_1 - $input_2; }
		elseif($input_symbol == "*") { $result = $input_1 * $input_2; }
		else { $result = $input_1 / $input_2; }
				
		return view('mathematic.index')
			->with('input_1', $input_1)
			->with('input_2', $input_2)
			->with('input_symbol', $input_symbol)
			->with('result', $result)
			;
    }

}
