<article class="lg:first:col-span-1 md:first:col-span-2 rounded-lg overflow-hidden shadow-md flex-col">
    <a href="{{url($url)}}" class="block overflow-hidden m-0">
        <img src="{{url($imgUrl)}}" alt="{{$imgAltText}}" class="aspect-16/10 w-full scale-[1.01] hover:scale-105 transition-transform rounded-none" />
    </a>
    <div class="bg-bs-grey-150 px-6 pt-4 pb-6 h-full">
        <h3 class="mb-2">{{$title}}</h3>
        <p>{{$excerpt}}<p>
        <a class="icon-link-arrow inline-block text-bs-blue-700 hover:text-bs-blue-800 visited:text-bs-blue-800 active:text-bs-blue-800 hover:underline font-medium mt-3 motion-reduce:transition-none" href="{{$url}}">Číst dále</a>
    </div>
</article>