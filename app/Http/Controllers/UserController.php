<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){
        $request ->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'city'=>'required',
            'skills'=>'required'
        ],[
           'username,required'=>'username can not be empty'
        ]);
        return $request;
    }
}
