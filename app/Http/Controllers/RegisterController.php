<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register(Request $request)
{
    return view('login');
}
function create()
{
    return 123;
}
}
