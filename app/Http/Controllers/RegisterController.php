<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'pageTitle' => 'Registration'
        ]);
    }
    public function store()
    {
        return request()->all();
    }
}
