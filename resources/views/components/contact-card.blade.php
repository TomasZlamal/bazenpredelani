<figure>
    <img class="w-full aspect-square object-cover object-top mb-3" src="{{ $imgUrl ? url($imgUrl) : getImage('/personal/placeholder.png') }}" alt="">
    <figcaption class="">
        <h3 class="mb-0">{{ $name }}</h3>
        @if($role)
            <p>{{$role }}</p>
        @endif
        
    </figcaption>
    <div class="mt-4">
        {{ $slot }}
    </div>
</figure>