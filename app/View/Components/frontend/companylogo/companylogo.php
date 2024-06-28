<?php

namespace App\View\Components\frontend\companylogo;

use App\Models\CompanyLogo as ModelsCompanyLogo;
use App\Models\GeneralSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class companylogo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.companylogo.companylogo', [
            'movingText' => GeneralSettings::find(1)->companylogo_text,
            'companyLogos' => ModelsCompanyLogo::all()
        ]);
    }
}
