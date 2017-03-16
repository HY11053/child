<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\FlashImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlashImageController extends Controller
{
    //
    function Create()
    {
        $pics=FlashImages::pluck('imagepics');
        $mpics=FlashImages::pluck('mimagepics');
        return view('admin.flash_create',compact('pics','mpics'));
    }
}
