<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.team.index', [
            'members' => Team::where('member_status', 'visible')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);

        $testimonial_id = Team::insertGetId([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'created_at' => now()
        ]);

        if ($request->hasFile('member_image')) {
            $destination = 'public/member_images';
            $photo = Str::replace(' ','_', Str::title($request->name)).'_'.'member_image'.".".$request->file('member_image')->getClientOriginalExtension();
            $path = $request->file('member_image')->storeAs($destination, $photo);
            Team::find($testimonial_id)->update([
                'member_image' => $photo,
            ]);
        }

        return redirect('dashboard/team')->with('create_team', 'Team Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        return view('backend.team.edit', [
            'team' => Team::find($team->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);

        Team::find($team->id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'member_status' => $request->member_status,
        ]);

        if ($request->hasFile('member_images')) {
            $destination = 'public/member_images';
            $photo = Str::replace(' ','_', Str::title($request->name)).'_'.'member_image'.".".$request->file('member_image')->getClientOriginalExtension();

            $path = $request->file('member_images')->storeAs($destination, $photo);

            Team::find($team->id)->update([
                'member_images' => $photo,
            ]);
        }

        return back()->with('update_status', 'Team Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {
        $imageName = $team->member_image;
        $imagePath = public_path('storage/member_images/' . $imageName);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        Team::find($team->id)->delete();

        return back()->with('delete_status', 'Member Deleted');
    }
}
