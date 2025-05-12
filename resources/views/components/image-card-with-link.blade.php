<figure {{$attributes->merge(['class' => 'relative rounded-lg overflow-clip'])}}>
    <a href="{{ url($href) }}" class="group">
        <img
            src="{{$imgUrl}}"
            alt="" {{-- No alt text needed, figcaption exists --}}
            class="w-full h-full object-cover group-hover:scale-105 ease-in-out transition-transform {{$imageAdjustments}}"
        />
        <figcaption class="image-gradient absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
            <h3 class="text-h4 m-0 font-semibold text-white">
                {{$caption}}
            </h3>
        </figcaption>
    </a>
</figure>