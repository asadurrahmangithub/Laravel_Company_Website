<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function index(){
        return view("admin.slider.home-slider");
    }
    public function save(Request $request){
        $slider = new Slider();
        $slider->slider_title = $request->slider_title;
        $slider->slider_subtitle = $request->slider_subtitle;
        $slider->slider_button_name = $request->slider_button_name;
        $slider->image = $this->image($request);
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect()->route('slider')->with('message','Slider Added Successfully!');
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageName = 'slider'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/slider-image/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
    public function manage(){
        return view('admin.slider.manage-slider',[
            'sliders' =>Slider::all(),
        ]);
    }
    public function edit($id){
        return view('admin.slider.edit-slider',[
            'slider' =>Slider::find($id),
        ]);
    }
    public function update(Request $request){
        $slider = Slider::find($request->id);
        $slider->slider_title = $request->slider_title;
        $slider->slider_subtitle = $request->slider_subtitle;
        $slider->slider_button_name = $request->slider_button_name;
        if ($request->image){
            unlink($slider->image);
            $slider->image = $this->image($request);
        }
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect()->route('manageSlider')->with('message','Slider Update Successfully!');
    }
    public function delete($id){
        $slider = Slider::find($id);
        unlink($slider->image);
        $slider->delete();
        return redirect()->route('manageSlider')->with('message','Slider Delete Successfully!');
    }
    public function status($id){
        $slider = Slider::find($id);
        if ($slider->publication_status==1){
            $slider->publication_status=2;
            $slider->save();
            return redirect()->route('manageSlider')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $slider->publication_status=1;
            $slider->save();
            return redirect()->route('manageSlider')->with('message','Publication Status Public Update Successfully!');
        }
    }
}
