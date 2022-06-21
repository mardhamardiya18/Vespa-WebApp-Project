<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $item = $request->all();

        Contact::create($item);

        toast('Pesan berhasil dikirim👍', 'success');

        return redirect(route('contact'));
    }
}
