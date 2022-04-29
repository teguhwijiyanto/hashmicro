<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;


class CheckTwoInputController extends Controller
{
    public function index()
    {
		return view('check_two_input.create');
    }

    public function create()
    {
        return view('check_two_input.create');
    }

    public function store(Request $request)
    {
		$request->validate([
          'input_1' => 'required|string',
          'input_2' => 'required|string',
		]);
	  
        $input_1 = $request->input('input_1');
		$input_2 = $request->input('input_2');
		
		$arr1 = str_split($input_1);
		$divider_num = count($arr1);
		$arr1_unique = array_unique($arr1);
		
		$sliced_chars = "";
		$sliced_chars_num = 0;
		$sliced_chars_procentage = 0;
		
		foreach($arr1_unique as $key => $val) {
			if (strpos(strtolower($input_2), strtolower($val)) !== false) {
				$sliced_chars .= "$val ";
				$sliced_chars_num++;
			}
		}
		
		$sliced_chars_procentage = $sliced_chars_num / $divider_num * 100;
		
		return view('check_two_input.index')
			->with('input_1', $input_1)
			->with('input_2', $input_2)
			->with('sliced_chars', $sliced_chars)
			->with('sliced_chars_num', $sliced_chars_num)
			->with('sliced_chars_procentage', $sliced_chars_procentage)
			;
    }

}
