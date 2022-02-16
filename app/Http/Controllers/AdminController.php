<?php

namespace App\Http\Controllers;

class AdminController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }
}
