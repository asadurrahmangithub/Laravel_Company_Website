<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutCard;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view("admin.about.add-main-about");
    }
    public function cardAbout(){
        return view("admin.about.add-card-about");
    }
    public function saveMainAbout(Request $request){
        $main_about = new About();
        $main_about->main_about_title = $request->main_about_title;
        $main_about->main_sub_about_title = $request->main_sub_about_title;
        $main_about->image = $this->image($request);
        $main_about->publication_status = $request->publication_status;
        $main_about->save();
        return redirect()->route('about')->with('message','Main About Section Added Successfully!');
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageName = 'about'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/about-image/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
    public function manageMainAbout(){
        return view('admin.about.manage-main-about',[
            'abouts' =>About::all(),
        ]);
    }
    public function editMainAbout($id){
        return view('admin.about.edit-main-about',[
            'about' =>About::find($id),
        ]);
    }
    public function updateMainAbout(Request $request){
        $main_about = About::find($request->id);
        $main_about->main_about_title = $request->main_about_title;
        $main_about->main_sub_about_title = $request->main_sub_about_title;
        if ($request->image){
            unlink($main_about->image);
            $main_about->image = $this->image($request);
        }
        $main_about->publication_status = $request->publication_status;
        $main_about->save();
        return redirect()->route('manage-main-about')->with('message','Update Main About Section Successfully!');
    }
    public function deleteMainAbout($id){
        $main_about = About::find($id);
        unlink($main_about->image);
        $main_about->delete();
        return redirect()->route('manage-main-about')->with('message','Delete Main About Section Successfully!');
    }
    public function mainStatus($id){
        $main_about = About::find($id);
        if ($main_about->publication_status==1){
            $main_about->publication_status=2;
            $main_about->save();
            return redirect()->route('manage-main-about')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $main_about->publication_status=1;
            $main_about->save();
            return redirect()->route('manage-main-about')->with('message','Publication Status Public Update Successfully!');
        }
    }

    //******************** Card About ****************************
    public function saveCardAbout(Request $request){
        $about_card = new AboutCard();
        $about_card->about_icon_class = $request->about_icon_class;
        $about_card->about_card_title = $request->about_card_title;
        $about_card->about_sub_card_title = $request->about_sub_card_title;
        $about_card->publication_status = $request->publication_status;
        $about_card->save();
        return redirect()->route('card-about')->with('message','About Card Section Added Successfully!');
    }
    public function manageCardAbout(){
        return view('admin.about.manage-card-about',[
            'about_cards' =>AboutCard::all(),
        ]);
    }
    public function editCardAbout($id){
        return view('admin.about.edit-card-about',[
            'about_card' =>AboutCard::find($id),
        ]);
    }
    public function updateCardAbout(Request $request){
        $about_card = AboutCard::find($request->id);
        $about_card->about_icon_class = $request->about_icon_class;
        $about_card->about_card_title = $request->about_card_title;
        $about_card->about_sub_card_title = $request->about_sub_card_title;
        $about_card->publication_status = $request->publication_status;
        $about_card->save();
        return redirect()->route('manage-card-about')->with('message','Update About Card Section Successfully!');
    }
    public function deleteCardAbout($id){
        $about_card = AboutCard::find($id);
        $about_card->delete();
        return redirect()->route('manage-card-about')->with('message','Delete About Card Section Successfully!');
    }
    public function cardStatus($id){
        $about_card = AboutCard::find($id);
        if ($about_card->publication_status==1){
            $about_card->publication_status=2;
            $about_card->save();
            return redirect()->route('manage-card-about')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $about_card->publication_status=1;
            $about_card->save();
            return redirect()->route('manage-card-about')->with('message','Publication Status Public Update Successfully!');
        }
    }
}
