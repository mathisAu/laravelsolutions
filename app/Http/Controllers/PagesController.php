<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        return view('welcome');
    }

    public function overons () {

        return view('overons');
    }

    public function contact () {

        return view('contact');
    }

    public function home () {

        return view('home');
    }
}

