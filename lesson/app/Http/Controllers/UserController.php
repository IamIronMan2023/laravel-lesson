<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        //Show List of records
        return 'Hello World! from UserController';
    }

    public function show($id)
    {
        //Show One record
        $mockdata = array(
            "id" => $id,
            "name" => "Juan Dela Cruz",
            "email" => "jdelacruz@email.com"
        );

        // -------------Return paremter using Die and Dump
        // return view('user', ['mockdata' => $mockdata]);


        // -------------Direct array parameter
        // return view('user', $mockdata);

        //throw exception
        // throw new Exception("My custom error");

        Log::info('Accessed user method in the UserController');

        // -------------Return parameter using with        
        return view('user')
            ->with('id', $id)
            ->with('name', 'Juan Dela Cruz')
            ->with('email', 'jdelacruz@email.com')
            ->with('mockdata', $mockdata);
    }

    public function create()
    {
        Log::info('Accessed updateUser in the UserController');

        return 'UserList';
    }

    public function update()
    {
        Log::info('Accessed updateUser in the UserController');

        return 'UserList';
    }

    public function destroy()
    {
        Log::info('Accessed deleteUser in the UserController');

        return 'UserList';
    }
}
