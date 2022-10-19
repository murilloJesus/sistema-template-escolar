<?php

namespace App\Http\Controllers;

use App\Classes\DataRetriever;
use App\Classes\DinamicCss;
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

            $data = [
                "content" => DataRetriever::getContent($resource)
            ];

            return view("content", $data);

        } else{

            return view('index');

        }

    }
}
