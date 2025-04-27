<section class="w-[35vw] min-w-[350px] flex items-center justify-center pt-2">
    <section id="{{ $id }}" class="flex flex-col items-center vert-elem w-fit p-0">
        <img src="{{ url($imgUrl) }}" class="vert-image mb-2" alt="{{ $name }}">

        <h3 class="mb-1"> {{ $name }} </h3>
        <section class="p-1 w-full">
            <p class="text-bs-grey-900 m-0">{{ $role }}</p>
            <x-phone-contact phone="{{ $phone }}"></x-phone-contact>
            <x-email-contact email="{{ $email }}"></x-email-contact>
        </section>
    </section>
</section>
