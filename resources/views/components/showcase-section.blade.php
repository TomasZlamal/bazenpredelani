<section id="{{$id}}">
    <div {{$attributes->merge(['class' => 'max-width-container grid md:grid-cols-2 grid-cols-1 md:gap-8 gap-4'])}} class="">
        <img src="{{ url($imgUrl) }}" alt="{{$imgAlt}}" class="w-full h-full object-cover">
        <div>
            <h2>{{$heading}}</h2>
            <p>{{$description}}</p>
            <div class="sm:flex sm:flex-wrap grid grid-cols-2 gap-4 mt-6">
                {{$slot}}
            </div>
        </div>
    </div>
</section>
