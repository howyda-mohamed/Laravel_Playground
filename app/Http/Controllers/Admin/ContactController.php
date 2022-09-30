<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::selection()->paginate(PAGINATION_COUNT);
        return view('admin.contacts.index',compact('contacts'));
    }
    public function delete($id)
    {
        try{
            $contacts=Contact::find($id);
            if(!$contacts)
            {
                return redirect()->route('admin.contact')->with(['error'=>'Some thing Went Wrong']);
            }
            $contacts->delete();
            return redirect()->route('admin.contact')->with(['status'=>'Data Deleted Sucessfully']);
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.contact')->with(['error'=>'Some thing Went Wrong']);
        }

    }
}
