<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $usertab=[
            (object)["id"=>"1","nom"=>"Nicolas", "age"=>"18", "email"=>"nico@email.com", "img"=>"nico.jpg"],   
        ];
        return view('users',compact('usertab')); 
    }
}
