<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    //


    public function checkin()
    {
        return view('checkin'); // Return the view for the form
    }

    // Store form data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'identification' => 'required|in:nid,passport,driving_license',
            'identification_number' => 'required|string|max:255',
            'purpose_of_visit' => 'required|string|max:255',
            'host_name' => 'required|string|max:255',
        ]);

        Visitor::create($request->all());

        return redirect()->back()->with('success', 'Guest check-in recorded successfully!');
    }



}
