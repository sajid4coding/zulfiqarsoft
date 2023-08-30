<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\{User, SocialMedia, Team};
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // return view('profile.edit', [
        //     'user' => $request->user(),
        // ]);
        return view('backend.users.user-account-settings', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        User::find(1)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'updated_at' => now(),
        ]);

        return Redirect::route('account.setting')->with('profile_status', 'Profile Information Updated');
        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function profile(){
        return view('backend.users.user-profile');
    }

    public function account_setting(Request $request){
        return view('backend.users.user-account-settings',[
            'social_medias' => SocialMedia::find(1),
            'team' => Team::where('member_status','visible')->first(),
            'user' => $request->user(),
        ]);
    }

    public function account_social_setting_post(Request $request){
        SocialMedia::find(1)->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'github' => $request->github,
        ]);

        return back()->with('SocialMedia_success', 'Social Media Link Updated');
    }

    public function change_email_status(Request $request){
        if ($request->has('email_status')) {
            User::find(1)->update([
                'email_status' => 'visible',
                'updated_at' => now(),
            ]);
        } else {
            User::find(1)->update([
                'email_status' => 'invisible',
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_phone_status(Request $request){
        if ($request->has('phone_status')) {
            User::find(1)->update([
                'phone_status' => 'visible',
                'updated_at' => now(),
            ]);
        } else {
            User::find(1)->update([
                'phone_status' => 'invisible',
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_address_status(Request $request){
        if ($request->has('address_status')) {
            User::find(1)->update([
                'address_status' => 'visible',
                'updated_at' => now(),
            ]);
        } else {
            User::find(1)->update([
                'address_status' => 'invisible',
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_social_status(Request $request){
        if ($request->has('social_status')) {
            SocialMedia::find(1)->update([
                'status' => 'visible',
                'updated_at' => now(),
            ]);
        } else {
            SocialMedia::find(1)->update([
                'status' => 'invisible',
                'updated_at' => now(),
            ]);
        }
        return back();
    }

    public function change_members_social_status(Request $request){
        if ($request->has('members_social_status')) {
            Team::where('social_account_status', 'invisible')->update([
                'social_account_status' => 'visible',
                'updated_at' => now(),
            ]);
        } else {
            Team::where('social_account_status', 'visible')->update([
                'social_account_status' => 'invisible',
                'updated_at' => now(),
            ]);
        }
        return back();
    }

}
