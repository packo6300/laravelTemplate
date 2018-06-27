<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('IsLogged');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home')->with("menu",array(
            ["titulo"=>'Mis COT',"color"=>'bg-success',"total"=>20],
            ["titulo"=>'Todas COT',"color"=>'bg-info',"total"=>50],
            ["titulo"=>'Mis OV',"color"=>'bg-warning',"total"=>100],
            ["titulo"=>'Todas OV',"color"=>'bg-danger',"total"=>200]
            ));
    }
}
