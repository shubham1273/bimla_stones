<?php

namespace App\Http\Controllers;
use App\Models\Quote;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'product_type' => 'required|string'
        ]);

        Quote::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'product_type' => $request->product_type
        ]);

        return redirect()->back()->with('success', 'Quote submitted successfully!');
    }

    public function index()
    {
        $quotes = Quote::where('status', 'active')->latest()->paginate(10);
        return view('admin.quotes.index', compact('quotes'));
    }

    public function destroy($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->status = 'deleted';
        $quote->save();

        return redirect()->back()->with('success', 'Quote deleted successfully!');
    }
}
