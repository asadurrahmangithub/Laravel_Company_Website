<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCard;
use App\Models\ServiceTitle;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view("admin.service.add-service-title");
    }
    public function serviceCard(){
        return view("admin.service.add-service-card");
    }
    public function saveServiceTitle(Request $request){
        $service_title = new ServiceTitle();
        $service_title->service_title = $request->service_title;
        $service_title->publication_status = $request->publication_status;
        $service_title->save();
        return redirect()->route('service-title')->with('message','Service Title Added Successfully!');
    }
    public function manageServiceTitle(){
        return view('admin.service.manage-service-title',[
            'service_titles' =>ServiceTitle::all(),
        ]);
    }
    public function editServiceTitle($id){
        return view('admin.service.edit-service-title',[
            'service_title' =>ServiceTitle::find($id),
        ]);
    }
    public function updateServiceTitle(Request $request){
        $service_title = ServiceTitle::find($request->id);
        $service_title->service_title = $request->service_title;
        $service_title->publication_status = $request->publication_status;
        $service_title->save();
        return redirect()->route('manage-service-title')->with('message','Update Service Title Successfully!');
    }
    public function deleteServiceTitle($id){
        $service_title = ServiceTitle::find($id);
        $service_title->delete();
        return redirect()->route('manage-service-title')->with('message','Delete Service Title Successfully!');
    }
    public function titleStatus($id){
        $service_title = ServiceTitle::find($id);
        if ($service_title->publication_status==1){
            $service_title->publication_status=2;
            $service_title->save();
            return redirect()->route('manage-service-title')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $service_title->publication_status=1;
            $service_title->save();
            return redirect()->route('manage-service-title')->with('message','Publication Status Public Update Successfully!');
        }
    }

    //******************** Card Service ****************************

    public function saveCardService(Request $request){
        $service_card = new ServiceCard();
        $service_card->service_icon_class = $request->service_icon_class;
        $service_card->service_card_title = $request->service_card_title;
        $service_card->service_card_subtitle = $request->service_card_subtitle;
        $service_card->publication_status = $request->publication_status;
        $service_card->save();
        return redirect()->route('service-card')->with('message','Service Card Added Successfully!');
    }
    public function manageCardService(){
        return view('admin.service.manage-service-card',[
            'service_cards' =>ServiceCard::all(),
        ]);
    }
    public function editCardService($id){
        return view('admin.service.edit-service-card',[
            'service_card' =>ServiceCard::find($id),
        ]);
    }
    public function updateCardService(Request $request){
        $service_card = ServiceCard::find($request->id);
        $service_card->service_icon_class = $request->service_icon_class;
        $service_card->service_card_title = $request->service_card_title;
        $service_card->service_card_subtitle = $request->service_card_subtitle;
        $service_card->publication_status = $request->publication_status;
        $service_card->save();
        return redirect()->route('manage-service-card')->with('message','Update Service Card Added Successfully!');
    }
    public function deleteCardService($id){
        $service_card = ServiceCard::find($id);
        $service_card->delete();
        return redirect()->route('manage-service-card')->with('message','Delete Service Card Successfully!');
    }
    public function cardStatus($id){
        $service_card = ServiceCard::find($id);
        if ($service_card->publication_status==1){
            $service_card->publication_status=2;
            $service_card->save();
            return redirect()->route('manage-service-card')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $service_card->publication_status=1;
            $service_card->save();
            return redirect()->route('manage-service-card')->with('message','Publication Status Public Update Successfully!');
        }
    }
}
