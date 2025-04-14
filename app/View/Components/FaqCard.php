<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqCard extends Component
{
	static int $count = 1;

	public int $id;

    /**
     * Create a new component instance.
     */
    public function __construct(
		public string $question,
		public string $answer,
	) {
		$this->id = self::$count;
		self::$count++;
	}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faq-card');
    }
}
