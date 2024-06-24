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
        return view('backend.service.edit', [
            'serviceNames' => ServiceCategory::where('service_category_status', 'on')->get(),
            'service' => Service::find($service->id),
            'serviceSteps' => ServiceSteps::where('serviceID', $service->id)->get(),
            'includeServices' => IncludeService::where('serviceID', $service->id)->get(),
            'serviceFAQs' => ServiceFAQ::where('serviceID', $service->id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        if($request->serviceDescription){
            Service::find($service->id)->update([
                'serviceDescription' => $request->serviceDescription,
                'updated_at' => now()
            ]);
        }
        if(!$service->serviceStatus == NULL){
            Service::find($service->id)->update([
                'serviceStatus' => $request->serviceStatus,
                'updated_at' => now()
            ]);
        }else{
            Service::find($service->id)->update([
                'serviceStatus' => 'on',
                'updated_at' => now()
            ]);
        }
        if($request->stepTitle && $request->stepDescription){
            $stepTitles = $request->stepTitle;
            $stepDescriptions = $request->stepDescription;
            $existingSteps = ServiceSteps::where('serviceID', $service->id)->get();
            foreach ($stepTitles as $index => $title) {
                if (isset($existingSteps[$index])) {
                    $existingSteps[$index]->update([
                        'stepTitle' => $title,
                        'stepDescription' => $stepDescriptions[$index],
                        'updated_at' => now()
                    ]);
                } else {
                    // Insert new step if it doesn't exist
                    ServiceSteps::create([
                        'serviceID' => $service->id,
                        'stepTitle' => $title,
                        'stepDescription' => $stepDescriptions[$index],
                        'created_at' => now()
                    ]);
                }
            }
        }
        if ($request->has('includeserviceName')) {
            $includeservices = $request->input('includeserviceName');

            // Clear existing include services for the service
            IncludeService::where('serviceID', $service->id)->delete();

            // Insert new include services
            foreach ($includeservices as $includeservice) {
                IncludeService::insert([
                    'serviceID' => $service->id,
                    'includeserviceName' => $includeservice,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
        if($request->faqQuestion && $request->faqAnswer){
            $faqQuestions = $request->faqQuestion;
            $faqAnswers = $request->faqAnswer;
            $existingfaqs = ServiceFAQ::where('serviceID', $service->id)->get();
            foreach ($faqQuestions as $index => $title) {
                if (isset($existingfaqs[$index])) {
                    $existingfaqs[$index]->update([
                        'faqQuestion' => $title,
                        'faqAnswer' => $faqAnswers[$index],
                        'updated_at' => now()
                    ]);
                } else {
                    // Insert new step if it doesn't exist
                    ServiceFAQ::create([
                        'serviceID' => $service->id,
                        'faqQuestion' => $title,
                        'faqAnswer' => $faqAnswers[$index],
                        'created_at' => now()
                    ]);
                }
            }
        }
        return back()->with('update_service', 'Service Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Service::find($service->id)->delete();
        ServiceSteps::where('serviceID', $service->id)->delete();
        ServiceFAQ::where('serviceID', $service->id)->delete();
        IncludeService::where('serviceID', $service->id)->delete();

        return back()->with('delete_status', 'Service Deleted');
    }

    public function service_step_delete($id)
    {
        ServiceSteps::find($id)->delete();
        return back()->with('service_step_delete', 'Service Step Deleted');
    }
    public function include_service_delete($id)
    {
        IncludeService::find($id)->delete();
        return back()->with('include_service_delete', 'Include Service Deleted');
    }
    public function service_faq_delete($id)
    {
        ServiceFAQ::find($id)->delete();
        return back()->with('service_faq_delete', 'Service FAQ Deleted');
    }
}
