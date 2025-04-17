<a {{$attributes->merge(['class' => 'text-center inline-block text-bs-white hover:text-bs-white active:text-bs-white visited:text-bs-white bg-bs-blue-600 hover:bg-bs-blue-700 active:bg-bs-blue-800 font-normal px-8 py-3 rounded-full no-underline transition-all motion-reduce:transition-none'])}}
    href="{{ url($href) }}"
>
    {{$slot}}
</a>
