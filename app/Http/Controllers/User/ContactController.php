<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Setting;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        $settings=Setting::selection()->first();
        return view("site.contact",compact('settings'));
    }
    public function store(ContactRequest $request)
    {   try{
            $contacts=Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]);
            if($contacts)
            {
                return redirect()->route('contact')->with(['status'=>"Your Message Send Successfuly"]);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('contact')->with(['error'=>"Some Thing Went Wrong Please Try Again"]);
        }
    }
}
