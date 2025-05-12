<x-layouts.app title="Ubytování">
    <x-hero :image="getImage('ubytovani.png')" motto="Ubytování"/>
    <x-page-section>
        <h2 class="mb-1">Kontakt</h2>
        <p class="mb-6">V případě zájmu o ubytování kontaktujte:</p>
        
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-10">
            <div class="px-6 pb-8 pt-5 rounded-xl bg-bs-grey-150">
                <h3 class="h4">Recepce</h3>
                
                <x-email-contact email="ubytovani@bazenslovany.cz">ubytovani@bazenslovany.cz</x-email-contact>
                <x-phone-contact phone="737 316 925">737 316 925</x-phone-contact>
            </div>
            <div class="px-6 pb-8 pt-5 rounded-xl bg-bs-grey-150">
                <h3 class="h4">Správce ubytování</h3>
                <p class="mb-0">Mgr. Petr Davídek</p>
                
                <x-email-contact email="davidek@bazenslovany.cz"></x-email-contact>
            </div>
    
    </x-page-section>
    <x-showcase-section
        id="ubytovani"
        heading="Pokoj Lux I a II "
        description="Luxusní moderní pokoje Lux I a Lux II nabízejí kompletní výbavu včetně WiFi a televize na pokoj. Sociální zařízení se nachází mimo pokoj. Cena za jednu noc je 800 Kč včetně DPH."
        :img-url="getImage('ubytovani.png')"
        img-alt=""
        inverted
        highlighted
    >
        <x-showcase-block highlighted highlight="800 Kč" text="Cena za 1 noc"/>
        <x-showcase-block highlighted highlight="TV" text="Na pokoji"/>
        <x-showcase-block highlighted highlight="WiFi" text="Zdarma pro zákazníky"/>
    </x-showcase-section>
    <x-showcase-section
        id="ubytovani"
        heading="Pokoje Standard"
        description="Moderní pokoje standart pro 3-6 osob nabízejí WiFi připojení zdarma. Sociální zařízení je společné, rozdělené na muže a ženy. Cena za noc je 400 Kč včetně DPH."
        :img-url="getImage('ubytovani.png')"
        img-alt=""
    >
        <x-showcase-block highlight="400 Kč" text="Cena za 1 noc"/>
        <x-showcase-block highlight="3-6" text="Počet osob"/>
        <x-showcase-block highlight="WiFi" text="Zdarma pro zákazníky"/>
    </x-showcase-section>

    <x-page-section highlighted>
        <h2>Navíc k ubytování</h2>
        <ul>
            <li class="text-lg"><strong>Přistýlka:</strong> 220 Kč / noc / 1 osoba včetně DPH</li>
            <li class="text-lg"><strong>Pozdní checkout:</strong> 200 Kč na osobu</li>
            <br>
            <p class="">Všechny pokoje mají přístup ke společenské místnost s televizí, patrovému sociálnímu zařízení (přízemí muži, patro ženy) a k síti WiFi.</p>
        </ul>
    </x-page-section>
</x-layouts.app>
