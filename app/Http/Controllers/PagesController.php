<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {  //Can access from outside the class
       $judul = 'Welcome to Laravel!!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('atas', $judul);
    }

    public function about() {
        $title = 'This is the about page';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title'=> 'Services',
            'services' => ['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}