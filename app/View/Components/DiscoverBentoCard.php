<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DiscoverBentoCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
		public string $imgUrl,
		public string $href,
		public string $caption = '',
		public string $imageAdjustments = '', // CSS for changing position of the image
	) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.discover-bento-card');
    }
}
