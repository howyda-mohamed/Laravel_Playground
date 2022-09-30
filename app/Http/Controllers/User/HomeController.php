<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Playground;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Staff;

class HomeController extends Controller
{
    public function index()
    {
        $settings=Setting::selection()->first();
        $services=Service::get();
        $playgrounds=Playground::where('active','1')->paginate(4);
        $staffs=Staff::get();
        return view('site.site',compact('playgrounds','staffs','services','settings'));
    }
    public function centers()
    {
        $settings=Setting::selection()->first();
        $centers=Center::all();
        return view('site.center',compact('centers','settings'));
    }
    public function playgrounds()
    {
        $settings=Setting::selection()->first();
        $playgrounds=Playground::get()->where('active','1');
        return view('site.playground',compact('playgrounds','settings'));
    }
}
