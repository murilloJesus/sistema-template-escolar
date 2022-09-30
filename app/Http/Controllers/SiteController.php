<?php

namespace App\Http\Controllers;

use App\Classes\DinamicCss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
    public function index($resource = null, $folder = null, $group = null){

        DinamicCss::generate();

        if($group){

            return view("$resource.$folder.$group");

        }else if($folder) {

            if( View::exists("$resource.$folder") ){
                return view("$resource.$folder");
            }else{
                return view("$resource.$folder.index");
            }

        }else if($resource){

            if(View::exists("$resource")){
                return view("$resource");
            }else{
                return view("$resource.index");
            }

        } else{

            return view('index');

        }

    }
}
