<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all();
        return view("allContacts",compact('allContacts'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string",
            "description" => "required|string|min:5",

        ]);
    }

    public function delete($contact)
    {
        $singleContact = ContactModel::where(['id'=>$contact])->first();


        if($singleContact == null)
        {
            die("Kontakt ne postoji");
        }

        $singleContact->delete();

        return redirect()->back();
    }
}
