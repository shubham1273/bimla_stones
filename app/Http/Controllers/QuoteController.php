<?php

namespace App\Http\Controllers;
use App\Models\Quote;
use App\Exports\QuoteExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteMail;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'product_type' => 'required|array',
            'product_type.*' => 'string',
            'reference_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $imageName = null;
        if ($request->hasFile('reference_image')) {
            $file = $request->file('reference_image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/quotes'), $imageName);
        }

        $quote = Quote::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'product_type' => implode(', ', $request->product_type),
            'reference_image' => $imageName,
        ]);

        Mail::to(config('mail.from.address'))->send(new QuoteMail($quote));

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

    public function export()
    {
        return Excel::download(new QuoteExport, 'quotes.xlsx');
    }
}
