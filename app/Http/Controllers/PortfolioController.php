<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request){
        return view("app.master");
    }
    public function home(Request $request){
        return view("pages.Home_Page");
    }
    public function about(Request $request){
        return view("pages.About_Me");
    }
    public function project(Request $request){
        return view("pages.Projects");
    }
    public function contact(Request $request){
        return view("pages.Contact_Page");
    }
}
