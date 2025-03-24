<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $image, public string $motto)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');

    }
}
