@props([
	'target' => '_self',
	'href' => '#'
])

<li class="list-none">
    <a {{$attributes->merge(['class' => 'no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal'])}}
       href="{{url($href)}}"
       target="{{$target}}"
    >
        {{$slot}}
    </a>
</li>
