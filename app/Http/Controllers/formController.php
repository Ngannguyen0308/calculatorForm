<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function simpleform(){
        return view('form');
    }

    public function notify(Request $request){
        $text = "Correct";
        $input = $request->input('num');
        if ($input == ''){
           $text = 'Number is required';
           return view('form')->with('result', $text);
        } elseif (!is_numeric($input)) {
            $text = 'This is a not number';
            return view('form')->with('result', $text);
        } elseif ((int) $input < 10) {
            $text = "Number must be greater than 10";
            return view('form')->with('result', $text);
        } else {
            return view('form')->with('result', $text);
        }
    }
}
