<?php

namespace App\Http\Controllers;
use App\Models\HomePage;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        // section 1
        $section1 = HomePage::where('page_key', 'section_1')->first();
        $section2 = HomePage::where('page_key', 'section_2')->first();
        $section3 = HomePage::where('page_key', 'section_3')->first();
        $section4 = HomePage::where('page_key', 'section_4')->first();
        $section6 = HomePage::where('page_key', 'section_6')->get();
        return view('website.welcome', compact('section1', 'section2', 'section3', 'section4', 'section6'));
    }
    public function products(){
        return view('website.products');
    }
    public function manufacture_process(){
        return view('website.manufacture_process');
    }
    public function about_us(){
        return view('website.about_us');
    }
    public function blog(){
        return view('website.blog');
    }
    public function blog_detail($id){
        return view('website.blog_detail');
    }
    public function gallery(){
        return view('website.gallery');
    }
    public function contact_us(){
        return view('website.contact_us');
    }
    public function career(){
        return view('website.career');
    }
}
