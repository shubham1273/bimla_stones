<?php

namespace App\Http\Controllers;
use App\Models\HomePage;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Process;
use App\Models\career;
use App\Models\Gallery;
use App\Models\AboutUsSection;
use App\Models\GeneralSetting;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        // section 1
        $section1 = HomePage::where('page_key', 'section_1')->first();
        $section2 = HomePage::where('page_key', 'section_2')->first();
        $section3 = HomePage::where('page_key', 'section_3')->first();
        $section4 = HomePage::where('page_key', 'section_4')->first();
        $section6 = HomePage::where('page_key', 'section_6')->get(); //foreach loop
        return view('website.welcome', compact('section1', 'section2', 'section3', 'section4', 'section6'));
    }

    public function products(){
        $section1 = Product::where('page_key', 'section_1')->get();
        $section2 = Product::where('page_key', 'section_2')->get();
        $section3 = Product::where('page_key', 'section_3')->get();
        $section4 = Product::where('page_key', 'section_4')->get();
        $section5 = Product::where('page_key', 'section_5')->get();
        $section6 = Product::where('page_key', 'section_6')->first();
        return view('website.products', compact('section1','section2', 'section3','section4','section5', 'section6'));
    }

    public function manufacture_process(){
        $section1 = Process::where('page_key', 'section_1')->first();
        $section2 = Process::where('page_key', 'section_2')->get();
        $section3 = Process::where('page_key', 'section_3')->first();
        $section4 = Process::where('page_key', 'section_4')->first();

        return view('website.manufacture_process', compact('section1', 'section2', 'section3', 'section4'));

    }
    public function about_us(){

        $section1 = AboutUsSection::where('page_key', 'section_1')->first();
        $section2 = AboutUsSection::where('page_key', 'section_2')->first();
        $section3 = AboutUsSection::where('page_key', 'section_3')->get();
        $section4 = AboutUsSection::where('page_key', 'section_4')->first();
        $section5 = AboutUsSection::where('page_key', 'section_5')->first();
        $section6 = AboutUsSection::where('page_key', 'section_6')->first();
        $section7 = AboutUsSection::where('page_key', 'section_7')->first();
        $leaders = AboutUsSection::where('page_key', 'our_leadership')->get();

        return view('website.about_us', compact('section1', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7', 'leaders'));
    }
    public function blog(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('website.blog', compact('blogs'));
    }
    public function blog_detail($id){
        $blog = Blog::where('id', $id)->first();
        return view('website.blog_detail', compact('blog'));
    }
    public function gallery(){

        $section1 = Gallery::where('page_key', 'section_1')->first();
        $section2 = Gallery::where('page_key', 'section_2')->first();
        $section3 = Gallery::where('page_key', 'section_3')->first();
        $section4 = Gallery::where('page_key', 'section_4')->first();

        return view('website.gallery', compact('section1', 'section2', 'section3', 'section4'));

    }
    public function contact_us(){
        $section1 = HomePage::where('page_key', 'contact_us')->first();
        $section2 = HomePage::where('page_key', 'contact_us2')->first();
        $section3 = GeneralSetting::where('key', 'company_full_name')->first();
        $section4 = GeneralSetting::where('key', 'full_address')->first();
        $section5 = GeneralSetting::where('key', 'factory_hours')->first();

        return view('website.contact_us', compact('section1', 'section2', 'section3', 'section4', 'section5'));

    }
    public function career()
    {
        $section1 = career::where('page_key', 'section_1')->first();
        $section2 = career::where('page_key', 'section_2')->first();


        return view('website.career', compact('section1', 'section2'));

    }
}
