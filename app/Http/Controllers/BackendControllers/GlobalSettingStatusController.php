<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\{SocialMedia, Team, GlobalSettingStatus, User};
use Illuminate\Http\Request;

class GlobalSettingStatusController extends Controller
{
    public function global_setting(Request $request){
        return view('backend.global-settings.index',[
            'globalSettingStatus' => GlobalSettingStatus::find(1),
        ]);
    }

    public function change_subcription_status(Request $request){
        if ($request->has('subcription_status')) {
            GlobalSettingStatus::find(1)->update([
                'subscription_section' => $request->subcription_status,
                'updated_at' => now(),
            ]);
        } else {
            GlobalSettingStatus::find(1)->update([
                'subscription_section' => NULL,
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_testimonial_status(Request $request){
        if ($request->has('testimonial_status')) {
            GlobalSettingStatus::find(1)->update([
                'testimonial_section' => $request->testimonial_status,
                'updated_at' => now(),
            ]);
        } else {
            GlobalSettingStatus::find(1)->update([
                'testimonial_section' => NULL,
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_portfolio_status(Request $request){
        if ($request->has('portfolio_status')) {
            GlobalSettingStatus::find(1)->update([
                'portfolio_section' => $request->portfolio_status,
                'updated_at' => now(),
            ]);
        } else {
            GlobalSettingStatus::find(1)->update([
                'portfolio_section' => NULL,
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_team_status(Request $request){
        if ($request->has('team_status')) {
            GlobalSettingStatus::find(1)->update([
                'team_section' => $request->team_status,
                'updated_at' => now(),
            ]);
        } else {
            GlobalSettingStatus::find(1)->update([
                'team_section' => NULL,
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_blog_status(Request $request){
        if ($request->has('blog_status')) {
            GlobalSettingStatus::find(1)->update([
                'blog_section' => $request->blog_status,
                'updated_at' => now(),
            ]);
        } else {
            GlobalSettingStatus::find(1)->update([
                'blog_section' => NULL,
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_newsletter_status(Request $request){
        if ($request->has('newsletter_status')) {
            GlobalSettingStatus::find(1)->update([
                'newsletter_section' => $request->newsletter_status,
                'updated_at' => now(),
            ]);
        } else {
            GlobalSettingStatus::find(1)->update([
                'newsletter_section' => NULL,
                'updated_at' => now(),
            ]);
        }
        return back();
    }

}
