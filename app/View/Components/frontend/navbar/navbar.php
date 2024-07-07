<?php

namespace App\View\Components\frontend\navbar;

use App\Models\blog;
use App\Models\GlobalSettingStatus;
use App\Models\Portfolio;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
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
        return view('components.frontend.navbar.navbar', [
            'portfolio_exists' => Portfolio::exists(),
            'blog_exists' => blog::exists(),
            'globalSettingStatus' => GlobalSettingStatus::find(1)
        ]);
    }
}
