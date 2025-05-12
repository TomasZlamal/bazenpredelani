<x-layouts.app title="Nás tým">
    <x-hero :image="getImage('zapad_slunce_venkovni.jpg')" motto="Náš tým"/>
    <x-page-section narrower>
        <h2>Plavecký klub Slávia VŠ Plzeň z.s.</h2>
        <ul class="mb-16">
            <li>Náměstí Gen. Píky 42326 00 Plzeň</li>
            <li>Tel.: 377 240 306 / 309(informace - recepce)</li>
            <li>IČ: 49779133</li>
            <li>DIČ: CZ49779133</li>
            <li>e-mail: info@bazenslovany.cz</li>
        </ul>
        
        <h2 class="mb-6">Kontakty</h2>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-16">
            <x-contact-card
                :img-url="getImage('/personal/kotora.jpg')"
                name="Ing. Bc. Tomáš Kotora"
                role="Vedoucí plaveckého bazénu"
            >
                <x-phone-contact phone="tel:+420789131222">789 131 222</x-phone-contact>
                <x-email-contact email="kotora@bazenslovany.cz">kotora@bazenslovany.cz</x-email-contact>
            </x-contact-card>
            
            <x-contact-card
                :img-url="getImage('/personal/patrik_davidek.jpg')"
                name="Mgr. Patrik Davídek"
                role="Provozní vedoucí"
            >
                <x-phone-contact phone="tel:+420377243578">377 243 578</x-phone-contact>
                <x-email-contact email="davidek@bazenslovany.cz">davidek@bazenslovany.cz</x-email-contact>
            </x-contact-card>
            <x-contact-card
                :img-url="getImage('/personal/josef_novak.jpg')"
                name="Josef Novák"
                role="Technický vedoucí"
            >
                <x-phone-contact phone="tel:+420377244034">377 244 034</x-phone-contact>
                <x-email-contact email="novak@bazenslovany.cz">novak@bazenslovany.cz</x-email-contact>
            </x-contact-card>
            <x-contact-card
                img-url=""
                name="Martin Kokrda"
                role="Zástupce provozu pro bazén Lochotín"
                phone="+420 789 131 222"
                email="kotora@email.cz"
            >
                <x-phone-contact phone="tel:+420601322109">601 322 109</x-phone-contact>
                <x-email-contact email="kokrda@bazenlochotin.cz">kokrda@bazenlochotin.cz</x-email-contact>
            </x-contact-card>
            <x-contact-card
                img-url=""
                name="Radka Bažilová"
                role="Vedoucí recepcí, organizace sportovišť"
                phone="+420 789 131 222"
                email="kotora@email.cz"
            >
                <x-phone-contact phone="tel:+420737037564">737 037 564</x-phone-contact>
                <x-email-contact email="bazilova@bazenslovany.cz">bazilova@bazenslovany.cz</x-email-contact>
            </x-contact-card>
            
        </div>
        
    </x-page-section>
</x-layouts.app>
