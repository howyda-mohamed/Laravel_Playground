<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services=Service::selection()->paginate(PAGINATION_COUNT);
        return view('admin.services.index',compact('services'));
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(ServiceRequest $request)
    {
        try{
            $services=Service::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'added_by'=>Auth()->user()->id,
            ]);
            if(!$services){
                return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }else{
                return redirect()->route('admin.service')->with(['status'=>'Data Inserted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function edit($id){
        try{
            $services=Service::find($id);
            if(!$services)
            {
                return redirect()->route('admin.service')->with(['error'=>'Invalid Data']);
            }
            else
            {
                return view('admin.services.edit',compact('services'));
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function update($id, ServiceRequest $request)
    {
        try{
            $services=Service::find($id);
            if(!$services)
            {
                return redirect()->route('admin.service')->with(['error'=>'Invalid Data']);
            }
            else{
                $services->title=$request->input('title');
                $services->description=$request->input('description');
                $updates=$services->update();
                if($updates)
                {
                    return redirect()->route('admin.service')->with(['status'=>'Data Updated Sucessfully']);
                }
                else{
                    return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong Please Try Again']);
                }
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function delete($id)
    {
        try{
            $services=Service::find($id);
            if(!$services)
            {
                return redirect()->route('admin.service')->with(['error'=>'Invalid Data']);
            }
            $delete=$services->delete();
            if($delete){
                return redirect()->route('admin.service')->with(['status'=>'Data Deleted Sucessfully']);
            }
            else{
                return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.service')->with(['error'=>'Some thing Went Wrong']);
        }
    }
}
