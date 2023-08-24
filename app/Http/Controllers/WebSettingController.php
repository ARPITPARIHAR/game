<?php

namespace App\Http\Controllers;

use App\Models\WebSetting;
use Illuminate\Http\Request;
use Str;
class WebSettingController extends Controller
{
    public function edit(Request $request)
    {
        // $setting=WebSetting::find(1);
       return view('admin.websetting.edit');
    }
    public function update(Request $request)
    {
        
        // $setting=WebSetting::find(1);
        $setting->site_name=$request->site_name;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = Str::random(5).time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/business');
            $file->move($destinationPath, $file_name);
            $setting->logo = $file_name;
        }
        $setting->address=$request->address;
        $setting->update();
        return back()->with('success','Sucessfully updated');
    }
}