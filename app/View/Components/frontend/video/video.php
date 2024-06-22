<?php

namespace App\View\Components\frontend\video;

use App\Models\GeneralSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class video extends Component
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
        return view('components.frontend.video.video', [
            'videoLink' => GeneralSettings::find(1)
        ]);
    }
}
