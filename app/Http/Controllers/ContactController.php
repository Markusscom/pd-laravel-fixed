<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::All();
        return view('contact.index', ['contacts' => $contacts]);
    }
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'question' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contact.create')->with('success', 'Paldies par jūsu ziņojumu!');
    }
}
