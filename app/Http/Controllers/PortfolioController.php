<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.portfolio.index', [
            'portfolios' => Portfolio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolio.create',[
            'categories' => ServiceCategory::where('service_category_status', 'on')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $portfolio_id = Portfolio::insertGetId([
            'portfolio_title' => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_meta_title' => $request->portfolio_meta_title,
            'portfolio_meta_description' => $request->portfolio_meta_description,
            'portfolio_url' => $request->portfolio_url,
            'project_start_from' => $request->project_start_from,
            'project_end_to' => $request->project_end_to,
            'portfolio_status' => $request->portfolio_status,
            'portfolio_category_id' => $request->category,
        ]);

        if ($request->hasFile('portfolio_thumbnail')) {
            $destination = 'public/portfolio_thumbnail';
            $photo = 'portfolio_thumbnail-'.$request->portfolio_title.'-'.Carbon::now()->format('Y').rand(1,999).".".$request->file('portfolio_thumbnail')->getClientOriginalExtension();

            $path = $request->file('portfolio_thumbnail')->storeAs($destination, $photo);

            Portfolio::find($portfolio_id)->update([
                'portfolio_thumbnail' => $photo,
            ]);
        }

        return back()->with('uploadSuccess', 'Portfolio Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backend.portfolio.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
