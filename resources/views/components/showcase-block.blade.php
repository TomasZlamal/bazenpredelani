@props([
	'highlight' => '',
	'text' => '',
	'highlighted' => false,
])

@php
    $bgColor = $highlighted ? 'bg-bs-blue-200' : 'bg-bs-blue-100';
    $textColor = 'text-bs-blue-950';
@endphp

<div class="flex w-full flex-col gap-1 sm:py-4 sm:px-6 py-4 px-1 items-center justify-center rounded-lg text-center {{$bgColor}}">
    <p class="h4 m-0 font-bold inline-block break-words {{$textColor}}">{{$highlight}}</p>
    <small class="m-0 {{$textColor}}">{{$text}}</small>
</div>