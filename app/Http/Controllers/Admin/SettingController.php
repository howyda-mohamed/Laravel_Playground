<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings=Setting::selection()->paginate(PAGINATION_COUNT);
        return view('admin.settings.index',compact('settings'));
    }
    public function create(){
        return view('admin.settings.create');
    }
    public function store(SettingRequest $request)
    {
        try{
            $settins=Setting::create([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'location'=>$request->location,
                'description'=>$request->description,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'added_by'=>Auth()->user()->id,
            ]);
            if(!$settins){
                return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }else{
                return redirect()->route('admin.setting')->with(['status'=>'Data Inserted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function edit($id){
        try{
            $settings=Setting::find($id);
            if(!$settings)
            {
                return redirect()->route('admin.setting')->with(['error'=>'Invalid Data']);
            }
            else
            {
                return view('admin.settings.edit',compact('settings'));
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function update($id, SettingRequest $request)
    {
        try{
            $settings=Setting::find($id);
            if(!$settings)
            {
                return redirect()->route('admin.setting')->with(['error'=>'Invalid Data']);
            }
            else{
                $settings->title=$request->input('title');
                $settings->sub_title=$request->input('sub_title');
                $settings->phone=$request->input('phone');
                $settings->location=$request->input('location');
                $settings->description=$request->input('description');
                $updates=$settings->update();
                if($updates)
                {
                    return redirect()->route('admin.setting')->with(['status'=>'Data Updated Sucessfully']);
                }
                else{
                    return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong Please Try Again']);
                }
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function delete($id)
    {
        try{
            $settings=Setting::find($id);
            if(!$settings)
            {
                return redirect()->route('admin.setting')->with(['error'=>'Invalid Data']);
            }
            $delete=$settings->delete();
            if($delete){
                return redirect()->route('admin.setting')->with(['status'=>'Data Deleted Sucessfully']);
            }
            else{
                return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.setting')->with(['error'=>'Some thing Went Wrong']);
        }
    }
}
