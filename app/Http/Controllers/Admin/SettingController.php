<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.setting.add-footer',compact('setting'));
    }
    public function store(Request $request){
        $setting = Setting::first();
        if ($setting){
            $setting->update([
                'left_title' =>$request->left_title,
                'footer_adders' =>$request->footer_adders,
                'footer_phone' =>$request->footer_phone,
                'footer_email' =>$request->footer_email,

                'right_title' =>$request->right_title,
                'sub_description' =>$request->sub_description,

                'twitter' =>$request->twitter,
                'facebook' =>$request->facebook,
                'instagram' =>$request->instagram,
                'skype' =>$request->skype,
                'linkedin' =>$request->linkedin,
            ]);
            return redirect()->back()->with('message','Footer Update Successfully');

        }
        else{
            Setting::create([
                'left_title' =>$request->left_title,
                'footer_adders' =>$request->footer_adders,
                'footer_phone' =>$request->footer_phone,
                'footer_email' =>$request->footer_email,

                'right_title' =>$request->right_title,
                'sub_description' =>$request->sub_description,

                'twitter' =>$request->twitter,
                'facebook' =>$request->facebook,
                'instagram' =>$request->instagram,
                'skype' =>$request->skype,
                'linkedin' =>$request->linkedin,
            ]);
            return redirect()->back()->with('message','Footer Add Successfully');
        }
    }
    public function logo(){
        $logo = Logo::first();
        return view('admin.setting.add-logo',compact('logo'));
    }
    public function logoUpload(Request $request){
        $logo = Logo::first();
        if ($logo){
            if ($request->file('image')) {
                if (file_exists($logo->image)) {
                    unlink($logo->image);
                }
                $logo->update([
                    $logo->image = $this->getImagUrl($request)
                ]);
            }
            return redirect()->back()->with('message','Logo Update Successfully');
        }
        else{
            if ($request->file('image')) {
                Logo::create([
                    'image' => $this->getImagUrl($request)
                ]);
            }
            return redirect()->back()->with('message','Logo Add Successfully');

        }
    }
    private function getImagUrl($request)
    {
        $image = $request->file('image');
        $imageNewName = 'logo'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/logo/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
}
