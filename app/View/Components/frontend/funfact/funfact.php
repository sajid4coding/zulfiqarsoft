<?php

namespace App\View\Components\frontend\funfact;

use App\Models\FunFact as ModelsFunFact;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class funfact extends Component
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
        return view('components.frontend.funfact.funfact', [
            'funfact' => ModelsFunFact::find(1)
        ]);
    }
}
