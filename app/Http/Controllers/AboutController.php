<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Whychooseus;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            $destination = 'public/about_page_images';
            $photo = 'about_image_1'.Carbon::now()->format('Y').rand(1,9999).".".$request->file('about_image_1')->getClientOriginalExtension();

            $path = $request->file('about_image_1')->storeAs($destination, $photo);

            About::find(1)->update([
                'about_image_1' => $photo,
            ]);
        }

        if ($request->hasFile('about_image_2')) {
            $destination = 'public/about_page_images';
            $photo = 'about_image_2'.Carbon::now()->format('Y').rand(1,9999).".".$request->file('about_image_2')->getClientOriginalExtension();

            $path = $request->file('about_image_2')->storeAs($destination, $photo);

            About::find(1)->update([
                'about_image_2' => $photo,
            ]);
        }

        if ($request->hasFile('about_image_3')) {
            $destination = 'public/about_page_images';
            $photo = 'about_image_3'.Carbon::now()->format('Y').rand(1,9999).".".$request->file('about_image_3')->getClientOriginalExtension();

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
            $destination = 'public/about_page_images';
            $photo = 'about_main_image'.Carbon::now()->format('Y').rand(1,9999).".".$request->file('about_main_image')->getClientOriginalExtension();

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
