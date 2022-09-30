<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaygroundRequest;
use App\Models\Center;
use App\Models\Playground;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PlaygroundController extends Controller
{
    public function index()
    {
        $playgrounds=Playground::selection()->paginate(PAGINATION_COUNT);
        return view('admin.playground.index',compact('playgrounds'));
    }
    public function edit($id){
        try{
            $centers=Center::all();
            $playgrounds=Playground::find($id);
            if(!$playgrounds)
            {
                return redirect()->route('admin.playground')->with(['error'=>'Invalid Data']);
            }
            else
            {
                return view('admin.playground.edit',compact('playgrounds','centers'));
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.playground')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function update($id, PlaygroundRequest $request)
    {
        try{
            $playgrounds=Playground::find($id);
            if(!$playgrounds)
            {
                return redirect()->route('admin.playground')->with(['error'=>'Invalid Data']);
            }
            else
            {
                $path=$playgrounds->image;
                if($request->has('image'))
                {

                    if(File::exists($path))
                    {
                        File::delete($path);
                    }
                    $file=$request->file('image');
                    $ext=$file->getClientOriginalExtension();
                    $file_name=time().'.'.$ext;
                    $path="assets/images/playground/".$file_name;
                    $file->move('assets/images/playground',$file_name);
                }
                if(!$request->has('active'))
            {
                $request->request->add(['active'=>'0']);
            }
                $playgrounds->title=$request->input('title');
                $playgrounds->center_id=$request->input('center_id');
                $playgrounds->price=$request->input('price');
                $playgrounds->description=$request->input('description');

                $playgrounds->image=$path;
                $playgrounds->active=$request->input('active');
                $updates=$playgrounds->update();
                if($updates)
                {
                    return redirect()->route('admin.playground')->with(['status'=>'Data Updated Sucessfully']);
                }
                else{
                    return redirect()->route('admin.playground')->with(['error'=>'Some thing Went Wrong Please Try Again']);
                }
            }
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.playground')->with(['error'=>'Some thing Went Wrong']);
        }
    }
    public function delete($id)
    {
        try{
            $playground=Playground::find($id);
            if(!$playground)
            {
                return redirect()->route('admin.playground')->with(['error'=>'Some thing Went Wrong']);
            }
            $playground->delete();
            return redirect()->route('admin.playground')->with(['status'=>'Data Deleted Sucessfully']);
        }
        catch(Exception $ex)
        {
            return redirect()->route('admin.playground')->with(['error'=>'Some thing Went Wrong']);
        }

    }
}
