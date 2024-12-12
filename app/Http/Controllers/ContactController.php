<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {

        if (auth()->check() && auth()->user()->isadmin) {
            $contacts = Contact::all();
            return view('pages.contact-admin', compact('contacts'));
        }

        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'regex:/^\+?[0-9]{7,15}$/'],
            'message' => 'required|string|max:1000',
        ], [
            'phone.regex' => 'The phone number must be valid (7-15 digits, optional "+" at the start).',
            'email.email' => 'Please provide a valid email address.',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')->with('success', 'Your query has been submitted.');
    }

    public function showAdminContactPage()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            $contacts = Contact::all();
            return view('pages.contact-admin', compact('contacts'));
        }

        return redirect()->route('contact');
    }
    public function deleteContact($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contact-admin')->with('success', 'Contact query deleted successfully.');
    }

    public function addComment(Request $request, $id)
    {
        $request->validate(['admin_comment' => 'required|string|max:1000']);
        $contact = Contact::findOrFail($id);
        $contact->update(['admin_comment' => $request->admin_comment]);

        return redirect()->route('contact-admin')->with('success', 'Comment added successfully.');
    }
}
