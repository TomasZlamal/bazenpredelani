<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
		public string $url,
		public string $imgUrl = '',
		public string $imgAltText = '',
	) {
		$this->imgUrl = $imgUrl ?: config('bazenslovany.default_img_url');
		$this->imgAltText = $imgAltText ?: config('bazenslovany.default_img_alt');
	}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
