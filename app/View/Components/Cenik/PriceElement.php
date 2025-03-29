<?php

namespace App\View\Components\Cenik;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PriceElement extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cenik.price-element');
    }
}
