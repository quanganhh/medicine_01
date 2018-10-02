<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HomeController extends Controller 
{
    public function index()
    {
        return view('admin.home.index');
    }
    
    public function email()
    {
        return 'test';
    }
}
