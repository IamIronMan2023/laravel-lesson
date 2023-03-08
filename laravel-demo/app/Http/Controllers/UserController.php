<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return '<h1>UserController Index Page</h1>';
    }


    public function show($id)
    {
        $mockData = array(
            "id" => $id,
            "name" => "Juan Dela Cruz",
            "email" => "jdelacruz@gmail.com"
        );


        //---Die and Dump
        //return view('user_profile', ['mockData' => $mockData]);

        //--Direct passs of parameter
        return view('user_profile', $mockData);
    }
}
