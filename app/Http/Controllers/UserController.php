<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('register');
    }
    public function store(UserRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $user->image = $imageName;
        }        
        $user->save();
        return view('login');
    }
    public function userProfile($id){
        $user = User::find($id);
        if ($user) {
            return view('userProfile', ['user' => $user]);
        } else {
            return back()->withErrors('User not found.');
        }
    }
    public function edit($id){
        $data = User::find($id);
        return view('userEdit', ['data' => $data]);
    }
}
