<?php

namespace App\View\Components\frontend\testimonial;

use App\Models\GlobalSettingStatus;
use App\Models\Testimonial as ModelsTestimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class testimonial extends Component
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
        return view('components.frontend.testimonial.testimonial', [
            'testimonials' => ModelsTestimonial::where('testimonial_status', 'active')->get(),
            'globalSettingStatus' => GlobalSettingStatus::find(1),
        ]);
    }
}
