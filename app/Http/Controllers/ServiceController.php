<?php

namespace App\Http\Controllers;

use App\Models\IncludeService;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFAQ;
use App\Models\ServiceSteps;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.service.index',[
            'services' => Service::where('serviceStatus', 'on')->get(),
            'serviceCount' => Service::where('serviceStatus', 'on')->count(),
            'serviceCategoriesCount' => ServiceCategory::where('service_category_status', 'on')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create', [
            'serviceNames' => ServiceCategory::where('service_category_status', 'on')->get(),
            'serviceCount' => Service::where('serviceStatus', 'on')->count(),
            'serviceCategoriesCount' => ServiceCategory::where('service_category_status', 'on')->count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service_id = Service::insertGetId([
            'serviceDescription' => $request->serviceDescription,
            'serviceCategory' => $request->serviceCategory,
            'serviceStatus' => $request->serviceStatus,
            'created_at' => now()
        ]);

        if($request->stepTitle && $request->stepDescription){
            $stepTitles = $request->stepTitle;
            $stepDescriptions = $request->stepDescription;
            foreach ($stepTitles as $index => $Title) {
                $stepID = ServiceSteps::insertGetId([
                    'serviceID' => $service_id,
                    'stepTitle' => $Title,
                    'created_at' => now()
                ]);

                ServiceSteps::where('id', $stepID)->update([
                    'stepDescription' => $stepDescriptions[$index],
                    'updated_at' => now()
                ]);
            }
        }

        if($request->includeserviceName){
            $includeservices = $request->includeserviceName;
            foreach ($includeservices as $includeservice) {
                IncludeService::insert([
                    'serviceID' => $service_id,
                    'includeserviceName' => $includeservice,
                    'created_at' => now()
                ]);
            }
        }

        if($request->faqQuestion && $request->faqAnswer){
            $faqQuestions = $request->faqQuestion;
            $faqAnswers = $request->faqAnswer;
            foreach ($faqQuestions as $index => $Title) {
                $faqID = ServiceFAQ::insertGetId([
                    'serviceID' => $service_id,
                    'faqQuestion' => $Title,
                    'created_at' => now()
                ]);
                ServiceFAQ::where('id', $faqID)->update([
                    'faqAnswer' => $faqAnswers[$index],
                    'updated_at' => now()
                ]);
            }
        }
        return redirect('dashboard/service')->with('create_service', 'Service Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }

    public function project_step(Request $request)
    {
        return $request;
    }
}
