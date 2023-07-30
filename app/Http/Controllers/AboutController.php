<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Whychooseus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about_agency()
    {
        return view('backend.about.about-us', [
            'about' => About::find(1)
        ]);
    }

    public function why_choose()
    {
        return view('backend.about.why-choose', [
            'whychooseus' => Whychooseus::find(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function about_agency_store(Request $request)
    {
        About::find(1)->update([
           'heading_line' => $request->heading_line,
           'about' => $request->about,
           'heading_meta_line' => $request->heading_meta_line,
           'about_meta_description' => $request->about_meta_description,
        ]);

        if ($request->hasFile('about_image_1')) {

            //DELETE PREVIOUS IMAGE FROM FOLDER START CODE
            $imageName = About::find(1)->about_image_1;
            $imagePath = public_path('storage/about_page_images/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            //DELETE PREVIOUS IMAGE FROM FOLDER END CODE

            $destination = 'public/about_page_images';
            $photo = 'about_image_1'.".".$request->file('about_image_1')->getClientOriginalExtension();

            $path = $request->file('about_image_1')->storeAs($destination, $photo);

            About::find(1)->update([
                'about_image_1' => $photo,
            ]);
        }

        if ($request->hasFile('about_image_2')) {

            //DELETE PREVIOUS IMAGE FROM FOLDER START CODE
            $imageName = About::find(1)->about_image_2;
            $imagePath = public_path('storage/about_page_images/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            //DELETE PREVIOUS IMAGE FROM FOLDER END CODE

            $destination = 'public/about_page_images';
            $photo = 'about_image_2'.".".$request->file('about_image_2')->getClientOriginalExtension();

            $path = $request->file('about_image_2')->storeAs($destination, $photo);

            About::find(1)->update([
                'about_image_2' => $photo,
            ]);
        }

        if ($request->hasFile('about_image_3')) {

            //DELETE PREVIOUS IMAGE FROM FOLDER START CODE
            $imageName = About::find(1)->about_image_3;
            $imagePath = public_path('storage/about_page_images/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            //DELETE PREVIOUS IMAGE FROM FOLDER END CODE

            $destination = 'public/about_page_images';
            $photo = 'about_image_3'.".".$request->file('about_image_3')->getClientOriginalExtension();

            $path = $request->file('about_image_3')->storeAs($destination, $photo);

            About::find(1)->update([
                'about_image_3' => $photo,
            ]);
        }

        return back()->with('update_status', 'Data Saved');
    }

    public function why_choose_store(Request $request)
    {
        Whychooseus::find(1)->update([
            'team_heading_line' => $request->team_heading_line,
            'about_team' => $request->about_team,
            'meta_team_heading_line' => $request->meta_team_heading_line,
            'meta_about_team' => $request->meta_about_team
        ]);

        if ($request->hasFile('about_main_image')) {

            //DELETE PREVIOUS IMAGE FROM FOLDER START CODE

            $imageName = Whychooseus::find(1)->about_main_image;
            $imagePath = public_path('storage/about_page_images/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            //DELETE PREVIOUS IMAGE FROM FOLDER END CODE

            $destination = 'public/about_page_images';
            $photo = 'about_main_image'.".".$request->file('about_main_image')->getClientOriginalExtension();

            $path = $request->file('about_main_image')->storeAs($destination, $photo);

            Whychooseus::find(1)->update([
                'about_main_image' => $photo,
            ]);
        }

        return back()->with('update_status', 'Data Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
