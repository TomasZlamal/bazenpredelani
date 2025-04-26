<x-layouts.app title="Služby">
    <x-hero :image="getImage('prvni_patro.jpg')" motto="Služby"/>
    <section class="flex flex-row gap-8 flex-wrap">
{{--        <div class="max-container-width"> --}}
            <p>V areálu bazénu a okolí Vám rádi nabídneme doplňkové služby</p>
            <x-sluzba :image="getImage('ubytovani.png')" text="Fitness City" link="#"/>
            <x-sluzba :image="getImage('ubytovani.png')" text="Fitness City" link="#"/>
            <x-sluzba :image="getImage('ubytovani.png')" text="Fitness City" link="#"/>
{{--        </div>--}}
    </section>
</x-layouts.app>
