<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favicon;
use App\Models\Iframe;
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

    public function favicon(){
        $favicon = Favicon::first();
        return view('admin.setting.add-favicon',compact('favicon'));
    }
    public function storeFavicon(Request $request){
        $favicon = Favicon::first();
        if ($favicon){
            if ($request->file('favicon_icon')) {
                if (file_exists($favicon->favicon_icon)) {
                    unlink($favicon->favicon_icon);
                }
                $favicon->update([
                    $favicon->favicon_icon = $this->getFaviconIcon($request),
                    'title' =>$request->title,
                ]);
            }
            if ($request->file('apple_touch')) {
                if (file_exists($favicon->apple_touch)) {
                    unlink($favicon->apple_touch);
                }
                $favicon->update([
                    $favicon->apple_touch = $this->getAppleTouch($request),
                    'title' =>$request->title,
                ]);
            }
            $favicon->update([
                'title' =>$request->title,
            ]);
            return redirect()->back()->with('message','Favicon Update Successfully');

        }
        else{
            if ($request->file('favicon_icon')) {
                if ($request->file('apple_touch')) {
                    Favicon::create([
                        'favicon_icon' => $this->getFaviconIcon($request),
                        'apple_touch' => $this->getAppleTouch($request),
                        'title' =>$request->title,
                    ]);
                }
                Favicon::create([
                    'favicon_icon' => $this->getFaviconIcon($request),
                    'title' =>$request->title,
                ]);
            }
            if ($request->file('apple_touch')) {
                Favicon::create([
                    'apple_touch' => $this->getAppleTouch($request),
                    'title' =>$request->title,
                ]);
            }
            return redirect()->back()->with('message','Favicon Add Successfully');
        }
    }

    private function getFaviconIcon($request)
    {
        $image = $request->file('favicon_icon');
        $imageNewName = 'favicon_icon'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/favicon-icon/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }

    private function getAppleTouch($request)
    {
        $image = $request->file('apple_touch');
        $imageNewName = 'apple_touch_icon'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/favicon-icon/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }

    public function iframe(){
        $iframe = Iframe::first();
        return view('admin.setting.add-iframe',compact('iframe'));
    }
    public function storeIframe(Request $request){
        $iframe = Iframe::first();
        if ($iframe){
            $iframe->update([
                'iframe_src' =>$request->iframe_src,
            ]);
            return redirect()->back()->with('message','Iframe Update Successfully');

        }
        else{
            Iframe::create([
                'iframe_src' =>$request->iframe_src,
            ]);
            return redirect()->back()->with('message','Iframe Add Successfully');
        }
    }
}
