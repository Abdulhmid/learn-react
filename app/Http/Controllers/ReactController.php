<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReactController extends Controller
{
    public function getIndex(){
    	$data['rowData'] = "d";
    	return view('react1', $data);
    }
}
