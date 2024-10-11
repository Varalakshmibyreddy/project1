<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List Of Students";
    }
    function add(){
        return "Student added";
    }
    function delete(){
        return "Student deleted";
    }
    function about($name){
        return $name;
    }
}
