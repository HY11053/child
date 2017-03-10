<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index()
    {
        return view('frontend.index');
    }
    public function Aboutus()
    {
        return view('frontend.aboutus');
    }
    public function Portfolio()
    {
        return view('frontend.profile');
    }
    public function Priching()
    {
        return view('frontend.priching');
    }
    public  function Ask()
    {
        return view('frontend.ask');
    }
    public function Reservation()
    {
        return view('frontend.reservation');
    }
    public function Contactus()
    {
        return view('frontend.contactus');
    }
    public function PortfolioArticle(Request $request,$id)
    {
        $thisinfos=Archive::find($id);
        $thispicinfos=array_filter(explode(',',Addonarticle::where('id',$id)->value('imagepics')));
        return view('frontend.article_article',compact('thisinfos','thispicinfos'));
    }
}
