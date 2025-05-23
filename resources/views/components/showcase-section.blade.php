<section id="{{$id}}" class="{!! $sectionColor !!}">
    <div class="max-width-container grid lg:grid-cols-2 grid-cols-1 md:gap-8 gap-4 lg:grid-flow-col">
        <div class="{{$inverted ? 'lg:col-start-2' : 'lg:col-start-1'}}">
            <img src="{{ url($imgUrl) }}" alt="{{$imgAlt}}" class="w-full h-full object-cover aspect-16/10">
        </div>
        <div class="{{$inverted ? 'lg:col-start-1' : 'lg:col-start-2'}}">
            <h2>{{$heading}}</h2>
            <p>{{$description}}</p>
            <div class="grid md:grid-cols-3 xs:grid-cols-2 gap-4 mt-6">
                {{$slot}}
            </div>
        </div>
    </div>
</section>
