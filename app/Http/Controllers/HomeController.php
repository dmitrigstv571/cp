<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function faturas( Request $request ){
        $json = $request->input('fat');
        $obj = json_decode($json);
        return view('faturas', compact(
            'obj',
        ));
    }
}
