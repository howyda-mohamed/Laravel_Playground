<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirects()
    {
        $role=Auth::user()->role_id;
        if($role == '1')
        {
            return view('admin.dashboard');
        }
        elseif($role == '2')
        {
            return view('owner.owner');
        }
        elseif($role == '3')
        {
            return view('user.dashboard');
        }
    }
}
