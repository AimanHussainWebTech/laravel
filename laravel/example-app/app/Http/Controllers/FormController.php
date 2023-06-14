<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getform(){
        return view('Form');
    }
    function postForm(Request $req ){
       $req->validate(
        [
           "userName" => "required",
           "email" => "required",
           "password" => "required",
           "confirmPass" => "required|same:password",
       ]
    );
    echo "<pre>";
    print_r($req->all());
    echo "</pre>";
    }


}