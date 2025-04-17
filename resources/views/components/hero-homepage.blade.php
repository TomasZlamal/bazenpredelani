<section id="hero" class="section bg-image relative h-[45rem] flex items-center">
    <div class="max-width-container w-full z-10 relative">
        <p class="text-bs-yellow font-semibold text-h5 ml-[0.125rem] mb-1">Bazén Slovany</p>
        <h1 class="text-bs-white">Plavecký areál města Plzně</h1>
        <p class="text-bs-grey-200 max-w-[45rem] tracking-normal text-[1.05rem]">Bazén Slovany v Plzni je ideálním místem pro relaxaci a sportovní aktivity. Nabízí moderní zázemí s plaveckým bazénem, saunou a vířivkou, což zaručuje zábavu a odpočinek pro všechny věkové kategorie.</p>
        <div class="flex gap-y-4 items-center mt-8 flex-wrap">
            <x-href-button :href="route('dostupnost')">Zkontrolovat dostupnost</x-href-button>
            <a class="ml-4 icon-link-arrow font-medium text-bs-grey-300 hover:text-bs-grey-200 active:text-bs-grey-100 visited:text-bs-grey-300" href="{{ url('/bazen') }}">Více o bazénu</a>
        </div>
    </div>
</section>
