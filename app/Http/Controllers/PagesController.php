<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';
        // return view('pages.index', compact('title','subTitle'));
        return view('pages.index') -> with('title', $title);
    }
    public function about(){
        $title ='About us';
        return view('pages.about')-> with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'Services123',
            'services' => ['web designing', 'programming', 'SEO']
        );
        return view('pages.services')-> with( $data);
    }
}
