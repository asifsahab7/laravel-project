<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function store(Request $request, $book)
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Create a new record in the buys table
        Buy::create([
            'user_id' => $userId,
            'book_id' => $book,
            'quantity' => 1, // Assuming the quantity is 1 for each purchase
        ]);

        return redirect()->back()->with('success', 'Book purchased successfully.');
    }
}
