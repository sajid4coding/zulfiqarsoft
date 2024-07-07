<?php

namespace App\View\Components\frontend\blog;

use App\Models\blog as ModelsBlog;
use App\Models\GlobalSettingStatus;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blog extends Component
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
        return view('components.frontend.blog.blog', [
            'blogs' => ModelsBlog::where('blogStatus', 'on')->get(),
            'globalSettingStatus' => GlobalSettingStatus::find(1),
        ]);
    }
}
