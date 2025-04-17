<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PhoneContact extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $phone = "+420 111 222 333")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.phone-contact');
    }
}
