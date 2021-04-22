<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:190|string',
            'email' => 'required|max:190|email:rfc,dns',
            'message' => 'required|string|min:6'
        ]);

        Contact::create($request->all());
        notify()->success('Mesajınız başarılı bir şekilde yöneticilere iletildi.', 'Başarılı');
        return redirect()->back();
    }
}
