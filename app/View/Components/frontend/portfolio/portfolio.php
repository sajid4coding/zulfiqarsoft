<?php

namespace App\View\Components\frontend\portfolio;

use App\Models\GlobalSettingStatus;
use App\Models\Portfolio as ModelsPortfolio;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class portfolio extends Component
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
        return view('components.frontend.portfolio.portfolio', [
            'portfolios' => ModelsPortfolio::where('portfolio_status', 'on')->get()->shuffle(),
            'globalSettingStatus' => GlobalSettingStatus::find(1),
        ]);
    }
}
