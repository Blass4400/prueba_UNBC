<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_index()
    {
        $data = array();
        $users = User::all();
        return view('dashboard', compact('users'));
    }
}
