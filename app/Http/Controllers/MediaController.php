<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Pressrelease;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index() {
        if($media = Media::where('star','0')->orderBy('post_date', 'DESC')->get())
        {
            $media1 = Media::where('star','1')->orderBy('post_date', 'DESC')->get();
            $press = Pressrelease::where('press','1')->orderBy('post_date', 'DESC')->get();
            return view('media',compact('media','media1','press'))
            ->with('i'); 
        }
    }               
}
