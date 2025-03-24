<section id="{{ $id }}" class="flex flex-col items-center">
    <h2> {{ $title }} </h2>
    <img src="assets/{{ $image }}">
    {{ $slot }}
</section>
