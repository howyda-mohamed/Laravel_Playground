<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CenterRequest;
use App\Models\Center;
use App\Models\Playground;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CenterController extends Controller
{
    public function index()
    {
        $centers=Center::selection()->paginate(PAGINATION_COUNT);
        return view('admin.centers.index',compact('centers'));
    }
    public function create(){
        return view('admin.centers.create');
    }
    public function store(CenterRequest $request)
    {
        try{
            if($request->has('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $file_name=time().'.'.$ext;
                $path="assets/images/centers/".$file_name;
                $file->move('assets/images/centers',$file_name);
            }
            $center=Center::create([
                'title'=>$request->title,
                'location'=>$request->location,
                'phone'=>$request->phone,
                'play_number'=>$request->play_number,
                'image'=>$path,
                'added_by'=>Auth()->user()->id,
            ]);
            if(!$center){
                return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }else{
                return redirect()->route('admin.center')->with(['status'=>'Data Inserted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function edit($id){
        try{
            $centers=Center::find($id);
            if(!$centers)
            {
                return redirect()->route('admin.center')->with(['error'=>'Invalid Data']);
            }
            else
            {
                return view('admin.centers.edit',compact('centers'));
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function update($id, CenterRequest $request)
    {
        try{
            $centers=Center::find($id);
            if(!$centers)
            {
                return redirect()->route('admin.center')->with(['error'=>'Invalid Data']);
            }
            else{
                $path=$centers->image;
                if($request->has('image'))
                {

                    if(File::exists($path))
                    {
                        File::delete($path);
                    }
                    $file=$request->file('image');
                    $ext=$file->getClientOriginalExtension();
                    $file_name=time().'.'.$ext;
                    $path="assets/images/centers/".$file_name;
                    $file->move('assets/images/centers',$file_name);

                }
                $centers->title=$request->input('title');
                $centers->phone=$request->input('phone');
                $centers->location=$request->input('location');
                $centers->play_number=$request->input('play_number');
                $centers->image=$path;
                $updates=$centers->update();
                if($updates)
                {
                    return redirect()->route('admin.center')->with(['status'=>'Data Updated Sucessfully']);
                }
                else{
                    return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong Please Try Again']);
                }
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function delete($id)
    {
        try{
            $centers=Center::find($id);
            if(!$centers)
            {
                return redirect()->route('admin.center')->with(['error'=>'Invalid Data']);
            }
            $delete=$centers->delete();
            if($delete){
                return redirect()->route('admin.center')->with(['status'=>'Data Deleted Sucessfully']);
            }
            else{
                return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.center')->with(['error'=>'Some thing Went Wrong']);
        }
    }
}
