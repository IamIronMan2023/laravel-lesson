<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello World! from UserController';
    }

    public function getUser($id)
    {
        $mockdata = array(
            "id" => $id,
            "name" => "Juan Dela Cruz",
            "email" => "jdelacruz@email.com"
        );

        // -------------Return paremter using Die and Dump
        // return view('user', ['mockdata' => $mockdata]);


        // -------------Direct array parameter
        // return view('user', $mockdata);


        // -------------Return parameter using with
        return view('user')
            ->with('id', $id)
            ->with('name', 'Juan Dela Cruz')
            ->with('email', 'jdelacruz@email.com')
            ->with('mockdata', $mockdata);
    }
}
