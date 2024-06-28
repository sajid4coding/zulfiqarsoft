<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.testimonial.index', [
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_position' => 'required',
            'client_message' => 'required',
        ]);

        $testimonial_id = Testimonial::insertGetId([
            'client_name' => $request->client_name,
            'client_position' => $request->client_position,
            'client_message' => $request->client_message,
            'created_at' => now()
        ]);

        if ($request->hasFile('client_image')) {
            $destination = 'public/client_images';
            $photo = Str::replace(' ','_', Str::title($request->client_name)).'client_image'.Carbon::now()->format('Y').rand(1,99).".".$request->file('client_image')->getClientOriginalExtension();

            $path = $request->file('client_image')->storeAs($destination, $photo);

            Testimonial::find($testimonial_id)->update([
                'client_image' => $photo,
            ]);
        }

        return redirect('dashboard/testimonial')->with('create_testimonial', 'Testimonial Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backend.testimonial.edit', [
            'testimonial' => Testimonial::find($testimonial->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            '*' => 'required',
        ]);

        Testimonial::find($testimonial->id)->update([
            'client_name' => $request->client_name,
            'client_position' => $request->client_position,
            'client_message' => $request->client_message,
            'testimonial_status' => $request->testimonial_status,
        ]);

        if ($request->hasFile('client_image')) {
            $destination = 'public/client_images';
            $photo = Str::replace(' ','_', Str::title($request->client_name)).'client_image'.Carbon::now()->format('Y').rand(1,99).".".$request->file('client_image')->getClientOriginalExtension();

            $path = $request->file('client_image')->storeAs($destination, $photo);

            Testimonial::find($testimonial->id)->update([
                'client_image' => $photo,
            ]);
        }

        return back()->with('update_status', 'Testimonial Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $imageName = $testimonial->client_image;
        $imagePath = public_path('storage/client_images/' . $imageName);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        Testimonial::find($testimonial->id)->delete();

        return back()->with('delete_status', 'Testimonial Deleted');
    }
}
