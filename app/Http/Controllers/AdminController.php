<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = contact::all();
        return view('admin.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        // Create a new contact
        contact::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Contact added successfully!');
    }

    public function edit($id)
    {
        $contact = contact::findOrFail($id);
        return view('admin.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        // Update the contact
        $contact = contact::findOrFail($id);
        $contact->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'Contact updated successfully!');
    }

    public function show($id)
    {
        $contact = contact::findOrFail($id);
        return view('admin.show', compact('contact'));
    }

    public function delete($id)
    {
        // Delete the contact
        $contact = contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.index')->with('success', 'Contact deleted successfully!');
    }
}