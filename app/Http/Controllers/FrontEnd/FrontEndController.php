<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutCard;
use App\Models\Contact;
use App\Models\ContactInfo;
use App\Models\ContactTitle;
use App\Models\Portfolio;
use App\Models\PortfolioTitle;
use App\Models\Question;
use App\Models\QuestionTitle;
use App\Models\ServiceCard;
use App\Models\ServiceTitle;
use App\Models\Slider;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'sliders'=>Slider::where('publication_status',1)->take(1)->get(),
            'main_abouts'=>About::where('publication_status',1)->take(1)->get(),
            'about_cards'=>AboutCard::where('publication_status',1)->take(2)->get(),
            'service_titles'=>ServiceTitle::where('publication_status',1)->take(1)->get(),
            'service_cards'=>ServiceCard::where('publication_status',1)->get(),
            'question_titles'=>QuestionTitle::where('publication_status',1)->take(1)->get(),
            'questions'=>Question::where('publication_status',1)->get(),
            'portfolio_titles'=>PortfolioTitle::where('publication_status',1)->take(1)->get(),
            'portfolio_apps'=>Portfolio::where('filter_button',1)->where('publication_status',1)->get(),
            'portfolio_webs'=>Portfolio::where('filter_button',2)->where('publication_status',1)->get(),
            'portfolio_others'=>Portfolio::where('filter_button',3)->where('publication_status',1)->get(),
        ]);
    }
    public function portfolioDetails($id){
        return view('frontEnd.portfolio.portfolio-details',[
            'portfolio' => Portfolio::find($id),
            'portfolio_apps'=>Portfolio::where('filter_button',1)->where('publication_status',1)->get(),
            'portfolio_webs'=>Portfolio::where('filter_button',2)->where('publication_status',1)->get(),
            'portfolio_others'=>Portfolio::where('filter_button',3)->where('publication_status',1)->get(),
        ]);
    }

    /** contact form send email in Gmail  */

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function contact(){
        return view('frontEnd.contact.contact',[
            'contact_titles'=>ContactTitle::where('publication_status',1)->take(1)->get(),
            'contact_infos'=>ContactInfo::where('publication_status',1)->get(),
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Thank you for Contact Us. Your message has been submitted successfully']);
    }
}
