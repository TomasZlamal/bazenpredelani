@props([
	'title' => '',
	'description' => ''
])

@php
    if(! $title) {
	    $fullTitle = config('bazenslovany.title_suffix');
    }
	else {
		$suffix = config('bazenslovany.site_title.suffix');
		$separator = config('bazenslovany.site_title.separator');
		$fullTitle = "$title $separator $suffix";
	}
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="{{$description}}">
        
        <title>{{$fullTitle}}</title>

        @vite('resources/css/app.css')
        @vite('resources/css/styles.css')
        @vite('resources/js/app.js')

    </head>
    <body>
        <x-layouts.header/>
        <main >
            {{ $slot }}
        </main>
        <x-layouts.footer/>
    </body>
</html>
