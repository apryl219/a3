<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index() {
    	return view('bill.calculate');
    }

  	/**
  	* GET
  	* /calculate
  	*/
  	public function calculate(Request $request) {
		$people = $request->input('people');
		$round = $request->input('round');
		$tab = $request->input('tab');
		if ($round == 'no') {
			return $total = round ($tab / $people, 2, PHP_ROUND_HALF_UP);
		} 
		else {
			return $total = round ($tab / $people, 0, PHP_ROUND_HALF_UP);
		}
			
			return view('bill.calculate')->with([
				$total,
				]);
	}

}


