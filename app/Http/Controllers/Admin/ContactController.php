<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\ContactTitle;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("admin.contact.add-contact-title");
    }
    public function contact(){
        return view("admin.contact.add-contact-content");
    }
    public function saveContactTitle(Request $request){
        $contact_title = new ContactTitle();
        $contact_title->contact_title = $request->contact_title;
        $contact_title->publication_status = $request->publication_status;
        $contact_title->save();
        return redirect()->route('contact-title')->with('message','Contact Title Added Successfully!');
    }
    public function manageContactTitle(){
        return view('admin.contact.manage-contact-title',[
            'contact_titles' =>ContactTitle::all(),
        ]);
    }
    public function editContactTitle($id){
        return view('admin.contact.edit-contact-title',[
            'contact_title' =>ContactTitle::find($id),
        ]);
    }
    public function updateContactTitle(Request $request){
        $contact_title = ContactTitle::find($request->id);
        $contact_title->contact_title = $request->contact_title;
        $contact_title->publication_status = $request->publication_status;
        $contact_title->save();
        return redirect()->route('manage-contact-title')->with('message','Update Contact Title Added Successfully!');
    }
    public function deleteContactTitle($id){
        $contact_title = ContactTitle::find($id);
        $contact_title->delete();
        return redirect()->route('manage-contact-title')->with('message','Delete Contact Title Successfully!');
    }
    public function titleStatus($id){
        $contact_title = ContactTitle::find($id);
        if ($contact_title->publication_status==1){
            $contact_title->publication_status=2;
            $contact_title->save();
            return redirect()->route('manage-contact-title')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $contact_title->publication_status=1;
            $contact_title->save();
            return redirect()->route('manage-contact-title')->with('message','Publication Status Public Update Successfully!');
        }
    }
    //******************** Card Service ****************************

    public function saveContactInfo(Request $request){
        $contact_info = new ContactInfo();
        $contact_info->contact_icon_class = $request->contact_icon_class;
        $contact_info->contact_info_title = $request->contact_info_title;
        $contact_info->contact_info_subtitle = $request->contact_info_subtitle;
        $contact_info->publication_status = $request->publication_status;
        $contact_info->save();
        return redirect()->route('contact-info')->with('message','Contact Info Added Successfully!');
    }
    public function manageContactInfo(){
        return view('admin.contact.manage-contact-content',[
            'contact_infos' =>ContactInfo::all(),
        ]);
    }
    public function editContactInfo($id){
        return view('admin.contact.edit-contact-content',[
            'contact_info' =>ContactInfo::find($id),
        ]);
    }
    public function updateContactInfo(Request $request){
        $contact_info = ContactInfo::find($request->id);
        $contact_info->contact_icon_class = $request->contact_icon_class;
        $contact_info->contact_info_title = $request->contact_info_title;
        $contact_info->contact_info_subtitle = $request->contact_info_subtitle;
        $contact_info->publication_status = $request->publication_status;
        $contact_info->save();
        return redirect()->route('manage-contact-info')->with('message','Update Contact Info Added Successfully!');
    }
    public function deleteContactInfo($id){
        $contact_info = ContactInfo::find($id);
        $contact_info->delete();
        return redirect()->route('manage-contact-info')->with('message','Delete Contact Info Successfully!');
    }
    public function contactStatus($id){
        $contact_info = ContactInfo::find($id);
        if ($contact_info->publication_status==1){
            $contact_info->publication_status=2;
            $contact_info->save();
            return redirect()->route('manage-contact-info')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $contact_info->publication_status=1;
            $contact_info->save();
            return redirect()->route('manage-contact-info')->with('message','Publication Status Public Update Successfully!');
        }
    }
}
