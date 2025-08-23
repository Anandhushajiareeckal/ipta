<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\News;    
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $news = News::latest()->take(5)->get();
        return view('frontend.contact.index', compact('contact', 'news'));
    }
}
