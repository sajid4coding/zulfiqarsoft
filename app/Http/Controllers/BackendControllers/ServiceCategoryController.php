<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.serviceCategory.index', [
            'categories' => ServiceCategory::where('service_category_status', 'on')->get(),
            'serviceCategoriesCount' => ServiceCategory::where('service_category_status', 'on')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.serviceCategory.create', [
            'serviceCategoriesCount' => ServiceCategory::where('service_category_status', 'on')->count()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category_id = ServiceCategory::insertGetId([
            'service_category_title' => $request->service_category_title,
            'service_category_slug' => Str::of($request->service_category_title)->slug('-'),
            'service_category_status' => $request->service_category_status,
            'created_at' => now()
        ]);

        if ($request->hasFile('service_category_thumbnail')) {
            $destination = 'public/service_category_thumbnail';
            $photo = 'service_category_thumbnail-'.$category_id."-".rand(1,999).".".$request->file('service_category_thumbnail')->getClientOriginalExtension();

            $path = $request->file('service_category_thumbnail')->storeAs($destination, $photo);

            ServiceCategory::find($category_id)->update([
                'service_category_thumbnail' => $photo,
            ]);
        }


        return back()->with('uploadSucess', 'Service Category Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceCategory $serviceCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceCategory $serviceCategory)
    {
        return view('backend.serviceCategory.edit', [
            'serviceCategory' => ServiceCategory::find($serviceCategory->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        if ($request->service_category_status) {
            ServiceCategory::find($serviceCategory->id)->update([
                'service_category_title' => $request->service_category_title,
                'service_category_slug' => Str::of($request->service_category_title)->slug('-'),
                'service_category_status' => $request->service_category_status,
            ]);
        } else {
            ServiceCategory::find($serviceCategory->id)->update([
                'service_category_title' => $request->service_category_title,
                'service_category_slug' => Str::of($request->service_category_title)->slug('-'),
                'service_category_status' => NULL,
                'created_at' => now()
            ]);
        }

        if ($request->hasFile('service_category_thumbnail')) {
            $destination = 'public/service_category_thumbnail';
            $photo = 'service_category_thumbnail-'.$serviceCategory->id."-".rand(1,999).".".$request->file('service_category_thumbnail')->getClientOriginalExtension();

            $path = $request->file('service_category_thumbnail')->storeAs($destination, $photo);

            ServiceCategory::find($serviceCategory->id)->update([
                'service_category_thumbnail' => $photo,
            ]);
        }

        return back()->with('update_status', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceCategory $serviceCategory)
    {

        $imageName = $serviceCategory->service_category_thumbnail;
        $imagePath = public_path('storage/service_category_thumbnail/' . $imageName);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        ServiceCategory::find($serviceCategory->id)->delete();

        return back()->with('delete_status', 'Category Deleted');
    }
}
