<?php

namespace App\Http\Controllers;

use App\Models\{About, Blog, BlogComment, SocialMedia, Testimonial, Contact, GeneralSettings, IncludeService, NewsLetter, Portfolio, Service, ServiceCategory, ServiceFAQ, ServiceSteps, Team, Whychooseus};
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index', [
            'follow_us' => SocialMedia::find(1),
            'tesimonial_exist' => Testimonial::exists(),
            'portfolio_exist' => Portfolio::exists(),
            'blog_exist' => Blog::exists(),
        ]);
    }

    public function about(){
        return view('frontend.about', [
            'about' => About::find(1),
            'whychooseus' => Whychooseus::find(1),
        ]);
    }

    public function service(){
        return view('frontend.service.index');
    }

    public function service_details($id){
        return view('frontend.service.serviceDetails', [
            'includeservices' => IncludeService::where('serviceID', $id)->get(),
            'serviceFAQs' => ServiceFAQ::where('serviceID', $id)->get(),
            'service' => Service::where('serviceCategory', $id)->get(),
            'serviceCategory' => ServiceCategory::find($id),
            'serviceSteps' => ServiceSteps::where('serviceID', $id)->get(),
        ]);
    }

    public function portfolio(){
        return view('frontend.portfolio.index', [
            'serviceCategories' => ServiceCategory::all(),
            'portfolios' => Portfolio::where('portfolio_status', 'on')->get()
        ]);
    }


    public function portfolio_details($id){
        $prev_portfolio_id = $id - 1;
        $next_portfolio_id = $id + 1;

        return view('frontend.portfolio.details', [
            'portfolio' => Portfolio::find($id),
            'prev_portfolio' => Portfolio::where([
                'id'=> $prev_portfolio_id,
                'portfolio_status' => 'on',
            ])->exists(),
            'next_portfolio' => Portfolio::where([
                'id' => $next_portfolio_id,
                'portfolio_status' => 'on',
            ])->exists(),
        ]);
    }

    public function blog(){
        return view('frontend.blog.index', [
            'blogs' => Blog::where('blogStatus', 'on')->latest()->paginate(2)
        ]);
    }

    public function blog_details($id){
        return view('frontend.blog.details', [
            'blog' => Blog::find($id),
            'comments' => BlogComment::where('blogID', $id)->get(),
            'comment_exists' => BlogComment::exists()
        ]);
    }

    public function blog_category($id){
        return view('frontend.blog.categoryBlog', [
            'blogs' => Blog::where('serviceCategory', $id)->get()
        ]);
    }

    public function team(){
        return view('frontend.team.index', [
            'teams' => Team::where('member_status', 'visible')->get()
        ]);
    }

    public function team_detail($id){
        return view('frontend.team.details', [
            'member' => Team::find($id)
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

    public function blog_comment(Request $request, $id){
        $request->validate([
            'commentUserName' => 'required',
            'commentUserEmail' => 'required',
            'userComment' => 'required'
        ]);
        BlogComment::insert([
            'blogID' => $id,
            'commentUserName' => $request->commentUserName,
            'commentUserEmail' => $request->commentUserEmail,
            'userComment' => $request->userComment,
            'created_at' => now()
        ]);
        return back();
    }

    public function newsletter_post(Request $request){
        $request->validate([
            'newsletterEmail' => 'required|unique:news_letters'
        ]);
        NewsLetter::insert([
            'newsletterEmail' => $request->newsletterEmail,
            'created_at' => now()
        ]);
        return back()->with('subscribed', 'Subscribe Successfully');
    }
}
