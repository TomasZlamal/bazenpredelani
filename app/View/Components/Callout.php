<?php

namespace App\View\Components;

use App\Enums\CalloutEnum;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Callout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public CalloutEnum $type,
        public string $title = "Callout"
    ) {}
    public function getClass(): string
    {
		return 'callout-'.strtolower($this->type->name);
	}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.callout');
    }
}
