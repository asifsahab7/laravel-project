<?php

namespace App\Http\Controllers;

use App\Models\Buy;
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
            $image->storeAs('public/images', $imageName);
            $user->image = $imageName;
        }        
        $user->save();
        return view('login')->with('success', 'Register successfully.');
    }
    public function userProfile($id) {
    
        $user = User::find($id);
    
        if ($user) {
           
            $books = Buy::where('user_id', $id)->with('book')->get();
    
            
            return view('userProfile', ['user' => $user, 'books' => $books]);
        } else {
            
            return back()->withErrors('User not found.');
        }
    }
    public function edit($id){
        $data = User::find($id);
        return view('userEdit', ['data' => $data]);
    }
    public function update(Request $request, $id)
{
    // Find the user by ID
    $user = User::find($id);

    // Update user data
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');
    // Update more fields as needed

    // Save the updated user
    $user->save();

    // Load the books bought by the user
    $books = Buy::where('user_id', $id)->with('book')->get();

    // Pass the user data and books to the view along with the success message
    return view('userProfile', ['user' => $user, 'books' => $books, 'success' => 'Profile updated successfully']);
}



}
