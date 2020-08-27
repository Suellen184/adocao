<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
            return view('front.home');
    }

    public function elemento(){
        return view('front.elemento');
}

    public function sobre(){
        return view('front.sobre');
    }

    public function article(){
        return view('front.article');
    }

    public function blog(){
        return view('front.blog');
    }

    public function service(){
        return view('front.service');
    }

    public function contato(){
        return view('front.contato');
    }









}
