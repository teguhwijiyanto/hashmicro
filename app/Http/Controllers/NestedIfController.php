<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;


class NestedIfController extends Controller
{
    public function index()
    {
		return view('nested_if.create');
    }

    public function create()
    {
        return view('nested_if.create');
    }

    public function store(Request $request)
    {
		$request->validate([
          'input_1' => 'required|integer'
		]);
	  
        $input_1 = $request->input('input_1');

		$str_result = "";

		for($x=1; $x<=$input_1; $x++) {
			
			if($x % 6 == 0) { 
				$str_result .= "$x. FizzBuzz<br>";
			}
			else {
				if($x % 3 == 0) { 
					$str_result .= "$x. Buzz<br>";
				}
				elseif($x % 2 == 0) { 
					$str_result .= "$x. Fizz<br>";
				}
				else {
					$str_result .= "$x. -<br>";
				}
			}
			
		}
	
		return view('nested_if.index')
			->with('input_1', $input_1)
			->with('str_result', $str_result)
			;
    }

}
