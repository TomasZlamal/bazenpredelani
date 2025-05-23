<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $imgUrl = '',
        public string $name,
        public string $role = '',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-card');
    }
}
