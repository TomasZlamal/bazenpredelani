<?php

namespace App\View\Components\Footer;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
	public bool $external = true;

    public function __construct(
		public string $href,
		public ?string $target = null,
	) {
		$app_host = parse_url(config('app.url'), PHP_URL_HOST);

		if(str_contains($href, $app_host) || ! str_starts_with($href, 'http')) {
			$this->external = false;
		}

		$this->target = $target ?: ($this->external ? '_blank' : '_self');
	}

    public function render(): View|Closure|string
    {
        return view('components.footer.link');
    }
}
