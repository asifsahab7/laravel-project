<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
{
    $name = $request['search' ?? ""];
    if($name != ""){
        $books = Book::where('name', 'LIKE', "%$name%")->paginate(5);
    }else{
        $books = Book::paginate(5);
    }
    return view('home', ['books' => $books]);
}
}