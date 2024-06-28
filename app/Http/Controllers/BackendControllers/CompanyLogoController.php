<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\{CompanyLogo, GeneralSettings};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyLogoController extends Controller
{
    public function companylogo_text(){
        return view('backend.companylogo.text', [
            'movingText' => GeneralSettings::find(1)->companylogo_text
        ]);
    }

    public function index(){
        return view('backend.companylogo.index', [
            'companylogos' => CompanyLogo::all()
        ]);
    }

    public function create(){
        return view('backend.companylogo.create');
    }

    public function store(Request $request){
        $request->validate([
            'companyLogo' => 'required'
        ]);

        $destination = 'public/companyLogo';
        $photo = 'companyLogo-'.Carbon::now()->format('Y').'-'.rand(1,99).".".$request->file('companyLogo')->getClientOriginalExtension();

        $path = $request->file('companyLogo')->storeAs($destination, $photo);

        CompanyLogo::insert([
            'companyLogo' => $photo,
            'created_at' => now()
        ]);

        return redirect('dashboard/companylogo')->with('uploadSucess', 'Company Logo Upload Successful');
    }

    public function destroy(CompanyLogo $companylogo){
        CompanyLogo::find($companylogo->id)->delete();

        $imageName = $companylogo->companyLogo;
        $imagePath = public_path('storage/companyLogo/' . $imageName);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        return back()->with('delete_status', 'Company Logo Deleted');
    }
}
