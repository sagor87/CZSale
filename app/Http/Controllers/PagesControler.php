<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function conditions(){

        return view('pages.conditions');
    }
    public function help(){

        return view('pages.help');
    }
    public function contact(){

        return view('pages.contact');
    }
    public function addClassified(){

        return view('pages.addClassified');
    }
    public function categories(){

        return view('pages.categories');
    }
    public function details(){

        return view('pages.details');
    }
}
