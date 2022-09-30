<?php

namespace App\Http\Controllers;

use App\Classes\DinamicCss;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        DinamicCss::generate();

        return view('index');
    }
}
