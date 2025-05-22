<x-layouts.app>
    <x-hero motto="Kadeřnictví, pedikůra a nehtová modeláž" :image="getImage('venkovni_bazen.jpg')"/>
    <x-page-section>
        <h2 class="mb-6">Služby</h2>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-10">
            <div class="px-5 py-5 pb-8 rounded-xl bg-bs-grey-150">
                <h3>Pedikůra</h3>
                <p class="text-lg mb-1">Dagmar Štaffková</p>
                <x-phone-contact phone="tel:+420777924226">777 924 226</x-phone-contact>
            </div>
            <div class="px-5 py-5 pb-8 rounded-xl bg-bs-grey-150">
                <h3>Nehtová modeláž</h3>
                <p class="text-lg mb-1">Vladimíra Heřmanová</p>
                <x-phone-contact phone="tel:+420777906865">777 906 865</x-phone-contact>
                <br>
                <i class="text-gray-700">Otevírací doba: po - pá, dle telefonických objednávek</i>
            </div>
            <div class="px-5 py-5 pb-8 rounded-xl bg-bs-grey-150">
                <h3>Kadeřnictví</h3>
                <p class="text-lg mb-0.5">Jana Vonášková</p>
                <x-phone-contact phone="tel:+420605269880">605 269 880</x-phone-contact>
                <br>
                <p class="text-lg mb-1">Lucie Koutenská</p>
                <x-phone-contact phone="tel:+420777020881">777 020 881</x-phone-contact>
            </div>
        </div>
    </x-page-section>
    <x-page-section highlighted narrower>
        <h2>Poskytované kadeřnické služby</h2>
        <ul>
            <li class="text-lg"><strong class="font-semibold">Barvení:</strong> krátké a dlouhé vlasy</li>
            <li class="text-lg"><strong class="font-semibold">Foukaná:</strong> krátké a dlouhé vlasy</li>
            <li class="text-lg"><strong class="font-semibold">Lakování vlasů</strong></li>
            <li class="text-lg"><strong class="font-semibold">Melír:</strong> odbarvení melírem, krátké a dlouhé vlasy</li>
            <li class="text-lg"><strong class="font-semibold">Mytí vlasů</strong></li>
            <li class="text-lg"><strong class="font-semibold">Pěnové tužidlo:</strong> klasické a barevné</li>
            <li class="text-lg"><strong class="font-semibold">Přeliv:</strong> krátké a dlouhé vlasy</li>
            <li class="text-lg"><strong class="font-semibold">Regenerace:</strong> špičky vlasů a zábal vlasů</li>
            <li class="text-lg"><strong class="font-semibold">Střih:</strong> základní, zastřižení konečků, celková změna, na sucho</li>
            <li class="text-lg"><strong class="font-semibold">Trvalá ondulace:</strong> krátké a dlouhé vlasy</li>
            <li class="text-lg"><strong class="font-semibold">Vysoušení:</strong> difuzérem a pod sušákem</li>
            <li class="text-lg"><strong class="font-semibold">Vodová ondulace:</strong> krátké a dlouhé vlasy</li>
        </ul>
    
    </x-page-section>
</x-layouts.app>