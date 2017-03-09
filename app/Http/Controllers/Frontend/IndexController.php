<?php

namespace App\Http\Controllers\Frontend;

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
}
