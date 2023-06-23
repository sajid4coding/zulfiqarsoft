<?php

namespace App\Http\Controllers;

use App\Models\{SocialMedia, Testimonial, Contact};
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index', [
            'follow_us' => SocialMedia::find(1),
            'tesimonial_exist' => Testimonial::exists()
        ]);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function contact_post(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'project_type' => 'required',
            'project_budget' => 'required|not_in:0',
            'project_details' => 'required'
        ]);

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'project_type' => $request->project_type,
            'approx_budget' => $request->project_budget,
            'project_details' => $request->project_details
        ]);

        return back()->with('sent_success', 'Successfully sent. We will back to as soon as possible.');
    }
}
