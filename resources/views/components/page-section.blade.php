@props([
	'highlighted' => false,
	'narrower' => false,
	'id' => '',
])

<section
    id="{{ $id }}"
    class=" {{ $highlighted ? 'bg-bs-blue-150' : 'bg-white' }}"
>
    <div {{ $attributes->merge(['class' => $narrower ? 'max-width-blog-container' : 'max-width-container']) }}>
        {{ $slot }}
    </div>
</section>