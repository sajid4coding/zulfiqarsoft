<?php

namespace App\View\Components\frontend\blogSideBar;

use App\Models\{About, Blog, ServiceCategory, Whychooseus};
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blogSideBar extends Component
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
        return view('components.frontend.blog-side-bar.blog-side-bar', [
            'whychooseus' => Whychooseus::find(1),
            'blogs' => Blog::where('blogStatus', 'on')->latest()->get(),
            'serviceCategories' => ServiceCategory::all(),
            'recentBlogs' => Blog::where('blogStatus', 'on')->latest()->get()
            // 'selectCategoryName' => ServiceCategory::find(Blog::find(1)->serviceCategory),
        ]);
    }
}
