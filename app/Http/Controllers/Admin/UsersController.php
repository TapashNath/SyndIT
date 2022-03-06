<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Admin.User.index', compact('users'));
    }

    public function customerDetails($id){
        $user = User::where('id', $id)->first();
        return view('Admin.User.details', compact('user'));
    }



}
