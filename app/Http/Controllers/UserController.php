<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        return view('layouts/app', ['id' => $id]);
    }
}