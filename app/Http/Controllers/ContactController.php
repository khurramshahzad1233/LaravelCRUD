<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Configuration\Php;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'value' => 'required',
            'gender' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->password = bcrypt($request->input('password')); // It's recommended to hash the password
        $contact->confirm_password = bcrypt($request->input('password_confirmation')); // Hash confirmation as well
        $contact->country = $request->input('country');
        $contact->state = $request->input('state');
        $contact->address = $request->input('address');
        $contact->city = $request->input('value');
        $contact->gender = $request->input('gender');

        $contact->save();
        return redirect('/contact/view');

        // return response()->json(['message' => 'Contact saved successfully!']);
    }

    // for view all data from database

    public function view(){
        $contacts=Contact::all();
        echo '<pre>';
        // print_r($contacts->toArray());
        $data = compact('contacts');
        return view('contactview')->with($data);
    }

    // delte a row from table 

    public function delete($id){
        // echo '<pre>';
        echo $id;
    }
}

