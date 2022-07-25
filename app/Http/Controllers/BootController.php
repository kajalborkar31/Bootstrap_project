<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boot;

class BootController extends Controller
{
    public function store(Request $request)
    {
        $data = new Boot();
        $data->email= $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('index')->with('message','Data Inserted Successfully');
    }
    public function index()
    {
        $data = Boot::paginate(2);
        return view('index',compact('data'));
    }
    public function edit($id)
    {
        $data = Boot::find($id);

        return view('edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = Boot::find($id);
        $data->email= $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('index')->with('message','Data Updated Successfully');
    }
    public function delete($id)
    {
        $data = Boot::find($id);
        $data->delete();
        return redirect()->route('index')->with('message','Data Deleted Successfully');
    }
}
