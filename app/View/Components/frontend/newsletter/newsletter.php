<?php

namespace App\View\Components\frontend\newsletter;

use App\Models\{GeneralSettings, GlobalSettingStatus};
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class newsletter extends Component
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
        return view('components.frontend.newsletter.newsletter', [
            'generalsetting' => GeneralSettings::find(1),
            'globalSettingStatus' => GlobalSettingStatus::find(1),
        ]);
    }
}
