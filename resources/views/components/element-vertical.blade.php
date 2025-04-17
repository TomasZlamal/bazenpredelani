<section id="{{ $id }}" class="flex flex-col items-center vert-elem">
    <h3> {{ $title }} </h3>
    <img src="assets/{{ $image }}" class="vert-image mb-8">
    {{ $slot }}
</section>
