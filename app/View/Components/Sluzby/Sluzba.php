<?php

namespace App\View\Components\Sluzby;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sluzba extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
		public string $image,
		public string $text,
		public string $link
	)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sluzba');
    }
}
