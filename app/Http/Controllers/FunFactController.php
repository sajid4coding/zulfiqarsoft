<?php

namespace App\Http\Controllers;

use App\Models\FunFact;
use Illuminate\Http\Request;

class FunFactController extends Controller
{
    public function funfact(){
        return view('backend.about.funfact',[
            'funfact' => FunFact::find(1)
        ]);
    }

    public function funfact_post(Request $request){
        $request->validate([
            '*' => 'required'
        ]);

        FunFact::find(1)->update([
            'heading_title' => $request->heading_title,
            'heading_description' => $request->heading_description,
            'happy_client' => $request->happy_client,
            'completed_project' => $request->completed_project,
            'team_member' => $request->team_member,
            'our_services' => $request->our_services
        ]);

        return back()->with('success', 'FunFact Updated');
    }
}
