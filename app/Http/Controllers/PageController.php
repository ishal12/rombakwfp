<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Gate;

class PageController extends Controller
{
    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContact()
    {
        //return view('pages.contact');
        if (Gate::denies('ijin-masuk')) {
            return view('welcome');
        }
        else{
            return view('pages.contact');
        }
        
    }
    
    public function getSetUser()
    {
        $this->middleware('auth');
        return view('pages.setting-user');
    }

}
