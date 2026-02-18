<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAdd extends Controller
{
    public function index()
    {
        return view('content.app.users.add');
    }
}
