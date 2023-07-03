<?php

namespace App\Http\Controllers;

use App\Models\GeneralSettings;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    public function general_setting(){
        return view('backend.general-settings.index', [
            'general_setting' => GeneralSettings::find(1)
        ]);
    }

    public function general_setting_post(Request $request){
        $request->validate([
            '*' => 'required'
        ]);
        GeneralSettings::find(1)->update([
            'agency_video' => $request->agency_video,
            'website_title' => $request->website_title,
            'copyright_text' => $request->copyright_text,
        ]);
        return back()->with('update_status', 'General Setting Updated');
    }

    public function image_general_setting(){
        return view('backend.general-settings.image', [
            'general_setting' => GeneralSettings::find(1)
        ]);
    }

    public function image_general_setting_post(Request $request){
        if($request->hasFile('favicon')){
            $destination = 'public/general_images/favicon';
            $photo = 'favicon'.Carbon::now()->format('Y').rand(1,9999).".".$request->file('favicon')->getClientOriginalExtension();
            $path = $request->file('favicon')->storeAs($destination,$photo);
            GeneralSettings::find(1)->update([
                'favicon' => $photo
            ]);
            return back();
        }

        if($request->hasFile('logo')){
            $destination = 'public/general_images/logo';
            $photo = 'logo'.Carbon::now()->format('Y').rand(1,9999).".".$request->file('logo')->getClientOriginalExtension();
            $path = $request->file('logo')->storeAs($destination,$photo);
            GeneralSettings::find(1)->update([
                'logo' => $photo
            ]);
            return back();
        }
        return back()->with('update_status', 'General Setting Updated');
    }
}
