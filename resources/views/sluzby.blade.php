<x-layouts.app title="Služby">
    <x-hero :image="getImage('prvni_patro.jpg')" motto="Služby"/>
    <x-page-section class="flex flex-row gap-8 flex-wrap">
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10 justify-center">
                <x-image-card-with-link
                    href="https://www.fitnesscity.cz/"
                    :img-url="getImage('fitness_city.jpg')"
                    caption="Fitness City"
                    class="aspect-square"
                />
                <x-image-card-with-link
                    href="sluzby/modni-salon"
                    :img-url="getImage('kadernictvi.jpg')"
                    caption="Módní salón"
                    class="aspect-square"
                />
                <x-image-card-with-link
                    href="https://nabazenuplzen.cz/"
                    :img-url="getImage('restaurace.jpg')"
                    caption="Restaurace"
                    class="aspect-square"
                />
            </div>

    </x-page-section>
</x-layouts.app>
