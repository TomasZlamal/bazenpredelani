<x-layouts.app title="Služby">
    <x-hero :image="getImage('prvni_patro.jpg')" motto="Služby"/>
    <x-page-section class="flex flex-row gap-8 flex-wrap">
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10 justify-center">
                <x-image-card-with-link
                    href="bazen#divoka_reka"
                    :img-url="getImage('fitness_city.jpg')"
                    caption="Fitness City"
                />
                <x-image-card-with-link
                    href="bazen#divoka_reka"
                    :img-url="getImage('kadernictvi.jpg')"
                    caption="Módní salón"
                />
                <x-image-card-with-link
                    href="bazen#divoka_reka"
                    :img-url="getImage('restaurace.jpg')"
                    caption="Restaurace"
                />
            </div>
           
    </x-page-section>
</x-layouts.app>
