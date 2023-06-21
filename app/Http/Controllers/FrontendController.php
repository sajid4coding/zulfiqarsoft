<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index', [
            'follow_us' => SocialMedia::find(1)
        ]);
    }
}
