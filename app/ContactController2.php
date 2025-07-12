<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController2 extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create() {
        return view('contact.create');
    }

    public function store(Request $request) {
        Contact::create($request->all());
        return redirect()->route('contact.index');
    }

    public function edit($id) {
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id) {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contact.index');
    }

    public function destroy($id) {
        Contact::destroy($id);
        return redirect()->route('contact.index');
    }
}
