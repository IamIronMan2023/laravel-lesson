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
        $data = array(
            "id" => $id,
            "name" => "Juan Dela Cruz",
            "age" => 20,
            "email" => "jdelacruz@email.com"
        );
        return view('user', $data);
    }
}
