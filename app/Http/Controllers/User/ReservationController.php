<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Playground;
use App\Models\Reservation;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index($id)
    {
        $settings=Setting::selection()->first();
        $playgrounds=Playground::selection()->where('id',$id)->first();
        return view('site.reservation',compact('playgrounds','settings'));
    }
    public function store($id, ReservationRequest $request)
    {
        try{
            $playgrounds=Playground::selection()->where('id',$id)->first();
            $total_price=($request->hours* $playgrounds['price']);
            $reservations=Reservation::selection()->where(['date'=>$request->date ,'time'=>$request->time])->get();
                $reservation=Reservation::create([
                'date'=>$request->date,
                'time'=>$request->time,
                'user_id'=>Auth()->user()->id,
                'play_id'=>$id,
                'hours'=>$request->hours,
                'total_price'=>$total_price,
                ]);
                if($reservation)
                {
                    return redirect()->route('playgrounds')->with(['status'=>'your Reservation Send Successfully your Total Price Is'.$total_price]);
                }
        }catch(Exception $ex)
        {
            return redirect()->route('playgrounds')->with(['error'=>'Some thing Went Wrong']);
        }
    }
}
