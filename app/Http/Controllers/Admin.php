<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pages;

class Admin extends Controller
{
    public static function index() {
        $pagesList = pages::get_pages();
        return view('admin',['pagesList'=>$pagesList]);
    }

    public static function editPage(Request $request) {
       

        $pattern = "/<(([a-z]+)\s*([^>]*))>/";
        if (preg_match($pattern, $request->content)) {
            pages::edit_page($request->id,$request->caption,$request->content,$request->parentCode,$request->prderNum);
            return redirect('/admin');
        }
        return "content syntaxis error";
    }
    
    public static function deletePage(Request $request) {
        pages::delete_page($request->id);
        return "Page ".$request->id." was deleted";
    }

    public static function createPage(Request $request) {
        $pattern = "/<(([a-z]+)\s*([^>]*))>/";
        if (preg_match($pattern, $request->content)) {
            pages::create_page($request->caption,$request->content,$request->url,$request->parentCode,$request->prderNum);
            return redirect('/admin');
        }
        return "content syntaxis error";

        
    }
    public static function edit($id) {
        $page =  pages::get_pageId($id);
        return view('edit',['page'=>$page[0]]);
    }

    
    public static function children($lang,$page) {
        $pagesList = pages::getChildren($lang."/".$page);
        return view('admin',['pagesList'=>$pagesList]);

    }

}
