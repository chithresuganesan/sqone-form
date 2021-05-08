<?php

namespace Sqone\Form\Http\Controllers;

use Sqone\Form\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index($value='')
    {
        return view('form::index');
    }

    public function form($value='')
    {
        return view('form::contact');
    }

    public function store(Request $request)
    {
       $contact = Contact::create($request->all());
        return back();
    }

    public function show($value='')
    {
        $contacts = Contact::get();
        return view('form::show', ['contacts' => $contacts]);
    }
}
