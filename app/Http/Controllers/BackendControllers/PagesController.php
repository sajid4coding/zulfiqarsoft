<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function tou(){
        return view('backend.pages.tou', [
            'tou' => Pages::find(1)
        ]);
    }

    public function tou_update(Request $request){
        $request->validate([
            'page_title' => 'required',
            'page_content' => 'required',
        ]);
        Pages::find(1)->update([
            'page_title' => $request->page_title,
            'page_title_slug' => Str::of($request->page_title)->slug('-'),
            'page_content' => $request->page_content,
            'page_meta_title' => $request->page_meta_title,
            'page_meta_content' => $request->page_meta_content,
            'page_status' => $request->page_status
        ]);

        return back()->with('updateSucess', "'$request->page_title' Page Updated");
    }

    public function pp(){
        return view('backend.pages.pp', [
            'pp' => Pages::find(2)
        ]);
    }

    public function pp_update(Request $request){
        $request->validate([
            'page_title' => 'required',
            'page_content' => 'required',
        ]);
        Pages::find(2)->update([
            'page_title' => $request->page_title,
            'page_title_slug' => Str::of($request->page_title)->slug('-'),
            'page_content' => $request->page_content,
            'page_meta_title' => $request->page_meta_title,
            'page_meta_content' => $request->page_meta_content,
            'page_status' => $request->page_status
        ]);

        return back()->with('updateSucess', "'$request->page_title' Page Updated");
    }
}
