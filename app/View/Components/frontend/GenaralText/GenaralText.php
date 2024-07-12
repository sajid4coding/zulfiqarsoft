<?php

namespace App\View\Components\frontend\GenaralText;

use App\Models\GeneralSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GenaralText extends Component
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
        return view('components.frontend.genaral-text.genaral-text', [
            'genaralText' => GeneralSettings::find(1)->genaral_text
        ]);
    }
}
