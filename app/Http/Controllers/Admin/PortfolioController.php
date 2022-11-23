<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioTitle;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('admin.portfolio.add-portfolio');
    }
    public function portfolioTitle(){
        return view('admin.portfolio.add-portfolio-title');
    }
    public function savePortfolioTitle(Request $request){
        $portfolio_title = new PortfolioTitle();
        $portfolio_title->portfolio_title = $request->portfolio_title;
        $portfolio_title->publication_status = $request->publication_status;
        $portfolio_title->save();
        return redirect()->route('portfolio-title')->with('message','Portfolio Title Added Successfully!');
    }
    public function managePortfolioTitle(){
        return view('admin.portfolio.manage-portfolio-title',[
            'portfolio_titles' =>PortfolioTitle::all(),
        ]);
    }
    public function editPortfolioTitle($id){
        return view('admin.portfolio.edit-portfolio-title',[
            'portfolio_title' =>PortfolioTitle::find($id),
        ]);
    }
    public function updatePortfolioTitle(Request $request){
        $portfolio_title = PortfolioTitle::find($request->id);
        $portfolio_title->portfolio_title = $request->portfolio_title;
        $portfolio_title->publication_status = $request->publication_status;
        $portfolio_title->save();
        return redirect()->route('manage-portfolio-title')->with('message','Update Portfolio Title Added Successfully!');
    }
    public function deletePortfolioTitle($id){
        $portfolio_title = PortfolioTitle::find($id);
        $portfolio_title->delete();
        return redirect()->route('manage-portfolio-title')->with('message','Delete Portfolio Title Successfully!');
    }
    public function titleStatus($id){
        $portfolio_title = PortfolioTitle::find($id);
        if ($portfolio_title->publication_status==1){
            $portfolio_title->publication_status=2;
            $portfolio_title->save();
            return redirect()->route('manage-portfolio-title')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $portfolio_title->publication_status=1;
            $portfolio_title->save();
            return redirect()->route('manage-portfolio-title')->with('message','Publication Status Public Update Successfully!');
        }
    }

    //******************** Portfolio Add ****************************

    public function savePortfolio(Request $request){
        $portfolio = new Portfolio();
        $portfolio->filter_button = $request->filter_button;
        $portfolio->title_name = $request->title_name;
        $portfolio->subtitle_name = $request->subtitle_name;
        $portfolio->category_name = $request->category_name;
        $portfolio->client_name = $request->client_name;
        $portfolio->project_date = $request->project_date;
        $portfolio->project_url = $this->make_slug($request);
        $portfolio->description = $request->description;
        $portfolio->image1 = $this->image1($request);
        $portfolio->image2 = $this->image2($request);
        $portfolio->image3 = $this->image3($request);
        $portfolio->publication_status = $request->publication_status;
        $portfolio->save();
        return redirect()->route('portfolio')->with('message','Portfolio Added Successfully!');
    }
    private function make_slug($request){
        if ($request->project_url){
            $str = $request->project_url;
            return preg_replace('/\s+/u','-',trim($str));
        }
//        $str = $request->header;
//        return preg_replace('/\s+/u','-',trim($str));
    }
    private function image1(Request $request){
        $image1 = $request->file('image1');
        $imageName = 'portfolio'.'-'.rand().'.'.$image1->extension();
        $directory = 'admin/custom-image/portfolio-image/image1/';
        $imageUrl = $directory.$imageName;
        $image1->move($directory,$imageName);
        return $imageUrl;
    }
    private function image2(Request $request){
        if ($request->image2){
            $image2 = $request->file('image2');
            $imageName = 'portfolio'.'-'.rand().'.'.$image2->extension();
            $directory = 'admin/custom-image/portfolio-image/image2/';
            $imageUrl = $directory.$imageName;
            $image2->move($directory,$imageName);
            return $imageUrl;
        }
    }
    private function image3(Request $request){
        if ($request->image3){
            $image3 = $request->file('image3');
            $imageName = 'portfolio'.'-'.rand().'.'.$image3->extension();
            $directory = 'admin/custom-image/portfolio-image/image3/';
            $imageUrl = $directory.$imageName;
            $image3->move($directory,$imageName);
            return $imageUrl;
        }
    }
    public function managePortfolio(){
        return view('admin.portfolio.manage-portfolio',[
            'portfolios' =>Portfolio::all(),
        ]);
    }
    public function editPortfolio($id){
        return view('admin.portfolio.edit-portfolio',[
            'portfolio' =>Portfolio::find($id),
        ]);
    }
    public function updatePortfolio(Request $request){
        $portfolio = Portfolio::find($request->id);
        $portfolio->filter_button = $request->filter_button;
        $portfolio->title_name = $request->title_name;
        $portfolio->subtitle_name = $request->subtitle_name;
        $portfolio->category_name = $request->category_name;
        $portfolio->client_name = $request->client_name;
        $portfolio->project_date = $request->project_date;
        $portfolio->project_url = $this->make_slug($request);
        $portfolio->description = $request->description;
        if ($request->image1){
            unlink($portfolio->image1);
            $portfolio->image1 = $this->image1($request);
        }
        if ($request->image2){
            if ($portfolio->image2==null){
                $portfolio->image2 = $this->image2($request);
            }
            else{
                unlink($portfolio->image2);
                $portfolio->image2 = $this->image2($request);
            }

        }
        if ($request->image3){
            if ($portfolio->image3==null){
                $portfolio->image3 = $this->image3($request);
            }
            else{
                unlink($portfolio->image3);
                $portfolio->image3 = $this->image3($request);
            }
        }
        $portfolio->publication_status = $request->publication_status;
        $portfolio->save();
        return redirect()->route('manage-portfolio')->with('message','Portfolio Update Successfully!');

    }
    public function deletePortfolio($id){
        $portfolio = Portfolio::find($id);
        if ($portfolio->image1!=null){
            unlink($portfolio->image1);
        }
        if ($portfolio->image2!=null){
            unlink($portfolio->image2);
        }
        if ($portfolio->image3!=null){
            unlink($portfolio->image3);
        }
        $portfolio->delete();
        return redirect()->route('manage-portfolio')->with('message','Portfolio Delete Successfully!');
    }
    public function portfolioStatus($id){
        $portfolio = Portfolio::find($id);
        if ($portfolio->publication_status==1){
            $portfolio->publication_status=2;
            $portfolio->save();
            return redirect()->route('manage-portfolio')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $portfolio->publication_status=1;
            $portfolio->save();
            return redirect()->route('manage-portfolio')->with('message','Publication Status Public Update Successfully!');
        }
    }

}
