<section id="{{ $id }}" class="flex flex-col items-center vert-elem">
    <img src="assets/{{ $image }}" class="vert-image mb-8">

    <h3> {{ $title }} </h3>
    {{ $slot }}
</section>
