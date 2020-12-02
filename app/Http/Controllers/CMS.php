<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pages;

class CMS extends Controller
{
    //
    public function get_page($lang,$page,Request $request) {
       
        if(!$request->input('sort')) {
            $url = $lang."/".$page;
            $data =  pages::get_page($url);
            $children = pages::getChildren($url);

        return view("welcome",["page"=>$data[0],'children' => $children]);
        }

        $url = $lang."/".$page;
        $data =  pages::get_page($url);
        $children = pages::getChildren($url,$request->input('sort'));

        return view("welcome",["page"=>$data[0],'children' => $children]);
    }

    public static function default(Request $request) {

        if(!$request->input('sort')) {
            $data =  pages::get_page("default");
            $children =  pages::getChildren("default");
            return view("welcome",["page"=>$data[0],'children' => $children]);
        }
        $data =  pages::get_page("default");
        $children =  pages::getChildren("default",$request->input('sort'));
        return view("welcome",["page"=>$data[0],'children' => $children]);
    }
}
