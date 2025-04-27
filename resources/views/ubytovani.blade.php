<x-layouts.app title="Ubytování">
    <x-hero :image="getImage('ubytovani.png')" motto="Ubytování"/>
    <x-page-section >
        <h2>Rezervace</h2>
        <h3>Recepce</h3>
        <x-email-contact email="ubytovani@bazenslovany.cz"></x-email-contact>
        <x-phone-contact phone="737 316 925"></x-phone-contact>
        <h3>Vedoucí</h3>
        <p>Mgr. Patrik Davídek</p>
        <x-email-contact email="davidek@bazenslovany.cz"></x-email-contact>


    </x-page-section>
    <x-showcase-section
        id="ubytovani"
        heading="Pokoj Lux I a II "
        description="Luxusní a moderní pokoj"
        :img-url="getImage('ubytovani.png')"
        img-alt=""
        inverted
        highlighted
    >
        <x-showcase-block highlight="800,- Kč" text="Cena za 1 noc a za 1 pokoj (vč. DPH)"/>
        <x-showcase-block highlight="TV v pokoji" text=""/>
        <x-showcase-block highlight="Sociální zařízení" text="samostatné k pokoji"/>
        <x-showcase-block highlight="WiFi" text="Zdarma pro zákazníky"/>
    </x-showcase-section>
    <x-showcase-section
        id="ubytovani"
        heading="Pokoje Standard"
        description="Moderní pokoj pro více osob"
        :img-url="getImage('ubytovani.png')"
        img-alt=""
    >
        <x-showcase-block highlight="400,- Kč" text="Cena za 1 noc a za 1 osobu (vč. DPH)"/>
        <x-showcase-block highlight="Sociální zařízení" text="společné, rozdělní muži / ženy"/>
        <x-showcase-block highlight="Pro 3 nebo 6 osob"/>
        <x-showcase-block highlight="WiFi" text="Zdarma pro zákazníky"/>
    </x-showcase-section>

    <x-page-section narrower highlighted>
        <h2>Ceny navíc k ubytování</h2>
        <h3>Přistýlka</h3>
        <p>220,- Kč / noc / 1 osoba vč. DPH</p>
        <h3>Prodloužení pobytu pozdní "check-out"</h3>
        <p>200,- Kč / osoba </p>
    </x-page-section>
</x-layouts.app>
