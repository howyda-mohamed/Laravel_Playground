<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Models\Center;
use App\Models\Staff;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    public function index()
    {
        $staffs=Staff::selection()->paginate(PAGINATION_COUNT)->where('added_by',Auth()->user()->id);
        return view('owner.staff.index',compact('staffs'));
    }
    public function create(){
        return view('owner.staff.create');
    }
    public function store(StaffRequest $request)
    {
        try{
            $center_id=Center::where('added_by','=',Auth()->user()->id)->get()->KeyBy('id');
            if($request->has('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $file_name=time().'.'.$ext;
                $path="assets/images/staff/".$file_name;
                $file->move('assets/images/staff',$file_name);
            }
            $staffs=Staff::create([
                'name'=>$request->name,
                'job'=>$request->job,
                'image'=>$path,
                'center_id'=>$center_id[1]['id'],
                'added_by'=>Auth()->user()->id,
            ]);
            if(!$staffs){
                return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }else{
                return redirect()->route('owner.staff')->with(['status'=>'Data Inserted Sucessfully']);
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function edit($id){
        try{
            $staffs=Staff::find($id);
            if(!$staffs)
            {
                return redirect()->route('owner.staff')->with(['error'=>'Invalid Data']);
            }
            else
            {
                return view('owner.staff.edit',compact('staffs'));
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function update($id, StaffRequest $request)
    {
        try{
            $staffs=Staff::find($id);
            if(!$staffs)
            {
                return redirect()->route('admin.staff')->with(['error'=>'Invalid Data']);
            }
            else{
                $path=$staffs->image;
                if($request->has('image'))
                {

                    if(File::exists($path))
                    {
                        File::delete($path);
                    }
                    $file=$request->file('image');
                    $ext=$file->getClientOriginalExtension();
                    $file_name=time().'.'.$ext;
                    $path="assets/images/staff/".$file_name;
                    $file->move('assets/images/staff',$file_name);

                }
                $staffs->name=$request->input('name');
                $staffs->job=$request->input('job');
                $staffs->image=$path;
                $updates=$staffs->update();
                if($updates)
                {
                    return redirect()->route('owner.staff')->with(['status'=>'Data Updated Sucessfully']);
                }
                else{
                    return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong Please Try Again']);
                }
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function delete($id)
    {
        try{
            $staffs=Staff::find($id);
            if(!$staffs)
            {
                return redirect()->route('owner.staff')->with(['error'=>'Invalid Data']);
            }
            $delete=$staffs->delete();
            if($delete){
                return redirect()->route('owner.staff')->with(['status'=>'Data Deleted Sucessfully']);
            }
            else{
                return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong Please Try Again']);
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('owner.staff')->with(['error'=>'Some thing Went Wrong']);
        }
    }
}
