<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request)
    {
        $user = UserRegister::all();
    }
}
