<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    public function form(){
        return view('form');
    }
    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => ['required','regex:/(?=.*[A-Z])(?=.*\d)/', 'string', 'min:8', 'confirmed'], // 'confirmed' ensures password_confirmation field matches password
            ], [
                'password' => 'The password confirmation does not match.',
            
                
                    

            ]
            );
            print_r("Thank you for registration");
    }
} 

