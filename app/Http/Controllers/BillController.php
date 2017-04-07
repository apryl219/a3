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
	}
	public function service(Request $request) {
		$service = $request->input('service');
		
		if ($service == 'excellent') {
			return $feedback = 'We are so happy your enjoyed your visit';
		} 
		elseif ($service == 'fair'){
			return $feedback = 'Please let us know what we can do to make your visit better for next time';
		}
		else {
			return $feedback ='A manager will come speak with you.';
		}
	}

}


