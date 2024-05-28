<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
           return view("admin/dashboard");
           
    }
    function admin()
    {
        return view("admin/dashboard");
    }
    function dosen()
    {
        return view("dosen/dashboard");
           
    }
    function mahasiswa()
    {
        return view("mahasiswa/dashboard");
        
    }
}
