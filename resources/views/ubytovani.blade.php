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
                
                <x-email-contact email="davidek@bazenslovany.cz">davidek@bazenslovany.cz</x-email-contact>
            </div>
            <div class="col-span-full text-center">
                <x-href-button class="max-sm:w-full" href="#kontaktni_formular">Rezervační formulář</x-href-button>
            </div>
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
    <x-page-section id="kontaktni_formular">
        <h2>Rezervace ubytování</h2>
        <form action="">
            
            <fieldset>
                <legend><h3 class="mb-6">Kontaktní údaje / Contact information</h3></legend>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <label for="full_name">Jméno a příjmení / Full name</label>
                        <input required type="text" name="full_name" id="full_name">
                    </div>
                    <div>
                        <label for="phone">Telefon / Phone</label>
                        <input required type="tel" name="phone" id="phone">
                    </div>
                    <div>
                        <label for="mail">Email</label>
                        <input required type="email" name="mail" id="mail" value="@">
                    </div>
                </div>
            </fieldset>
            
            <hr>
            
            <fieldset>
                <legend><h3 class="mb-6">Detaily rezervace / Reservation details</h3></legend>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                    <div>
                        <label for="from">Od / From</label>
                        <input required type="date" name="from" id="from">
                    </div>
                    <div>
                        <label for="to">Do / To</label>
                        <input required type="date" name="to" id="to" value="@">
                    </div>
                    <div>
                        <label for="count">Počet osob / No. of people</label>
                        <input required type="number" inputmode="numeric" name="count" id="count" value="1">
                    </div>
                    <div>
                        <label for="room_type">Typ pokoje / Room type</label>
                        <select name="room_type" id="room_type">
                            <option value="standart">Standard</option>
                            <option value="lux">Lux</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            
            <hr>
            
            <fieldset>
                <legend><h3 class="mb-6">Fakturační údaje / Billing information</h3></legend>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <label for="address">Adresa / Address</label>
                        <input required type="text" name="address" id="address">
                    </div>
                    <div>
                        <label for="city">Město / City</label>
                        <input required type="text" name="city" id="city">
                    </div>
                    <div>
                        <label for="postal">PSČ / Postal code</label>
                        <input required type="text" inputmode="numeric" name="postal" id="postal">
                    </div>
                    <div class="col-span-full">
                        <label for="room_type">Druh platby / Payment option</label>
                        <select name="room_type" id="room_type">
                            <option value="cash">Hotovosti při příjezdu / Cash at arrival</option>
                            <option value="card">Na účet (předem) / Bank transfer (in advance)</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            
            <hr>
            
            <fieldset>
                <legend><h3 class="mb-6">Ostatní / Other</h3></legend>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <label for="notes">Poznámky / Notes</label>
                        <textarea rows="4" type="text" name="notes" id="notes" class="resize-none"></textarea>
                    </div>
                </div>
            </fieldset>
            <div class="mt-8">
                <x-button class="max-sm:w-full">Odeslat formulář / Send form</x-button>
            </div>
        </form>
    </x-page-section>
</x-layouts.app>
