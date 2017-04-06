<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index() {
    	return view('bill.show');
    }

  	public function show($total = null) {
  		return view('bill.show')->with([
  			'total' => $total,

  		]);
  	}
}


