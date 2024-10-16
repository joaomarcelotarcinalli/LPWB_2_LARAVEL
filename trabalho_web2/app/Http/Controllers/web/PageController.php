<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function sobre()
    {
        return view('web.sobre');
    }

    public function login()
    {
        return view('web.login');
    }
    
    public function adm()
    {
        return view('web.dashboard');
    }

    public function cad()
    {
        return view('web.home');
    }
    public function planos()
    {
        return view('web.planos');
    }

    public function assin()
    {
        return view('web.pagTeste');
    }

    public function hora()
    {
        return view('web.hora');
    }
};
