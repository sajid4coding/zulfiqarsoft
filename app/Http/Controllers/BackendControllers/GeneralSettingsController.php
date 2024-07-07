<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use App\Models\NewsLetter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'newsletter_text' => $request->newsletter_text,
            'under_logo_text' => $request->under_logo_text,
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

            //DELETE PREVIOUS IMAGE FROM FOLDER START CODE
            $imageName = GeneralSettings::find(1)->favicon;
            $imagePath = public_path('storage/general_images/favicon/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            //DELETE PREVIOUS IMAGE FROM FOLDER END CODE

            $destination = 'public/general_images/favicon';
            $photo = 'favicon'.".".$request->file('favicon')->getClientOriginalExtension();
            $path = $request->file('favicon')->storeAs($destination,$photo);
            GeneralSettings::find(1)->update([
                'favicon' => $photo
            ]);
            return back();
        }

        if($request->hasFile('logo')){

            //DELETE PREVIOUS IMAGE FROM FOLDER START CODE
            $imageName = GeneralSettings::find(1)->logo;
            $imagePath = public_path('storage/general_images/logo/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            //DELETE PREVIOUS IMAGE FROM FOLDER END CODE

            $destination = 'public/general_images/logo';
            $photo = 'logo'.".".$request->file('logo')->getClientOriginalExtension();
            $path = $request->file('logo')->storeAs($destination,$photo);
            GeneralSettings::find(1)->update([
                'logo' => $photo
            ]);
            return back();
        }
        return back()->with('update_status', 'General Setting Updated');
    }

    public function newsletter(){
        return view('backend.newsletter.newsletter', [
            'newsletters' => NewsLetter::all()
        ]);
    }

    public function newsletter_delete_post($id){
        NewsLetter::find($id)->delete();
        return back()->with('insert_status', 'Email Deleted');
    }

    public function companylogo_text_post(Request $request){
        GeneralSettings::find(1)->update([
            'companylogo_text' => $request->movingText
        ]);

        return back()->with('updateSuccess', 'Moving Text Updated');
    }
}
