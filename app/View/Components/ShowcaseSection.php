<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowcaseSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
		public string $heading,
		public string $description = '',
		public string $imgUrl,
		public string $imgAlt = '',
		public string $id = '',
		public bool $highlighted = false,
	) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.showcase-section', [
			'sectionColor' => $this->highlighted ? 'bg-bs-blue-150' : 'bg-white'
		]);
    }
}
