<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
	public function index()
	{
		$enquiries = Enquiry::latest()->get();
		return view('admin.contact.enquiry', compact('enquiries'));
	}

	public function show(Enquiry $enquiry)
	{
		return view('admin.contact.show_enquiry', compact('enquiry'));
	}
}

