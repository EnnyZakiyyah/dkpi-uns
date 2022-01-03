<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm(Request $request)
    {
        return view('contact.contact');
    }

    public function storeForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'pesan' => 'required'
        ]);


        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'pesan' => $request->get('pesan'),
        ];
        ContactUs::create($request->all());
        Mail::send('contact.contact-template', $data, function ($message) use ($request) {
            $message->from($request->email);
            $message->to('dkpiuns@gmail.com', 'Hello Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Thanks for contacting us.');
    }
}
