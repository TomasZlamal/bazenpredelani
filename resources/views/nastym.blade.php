<x-layouts.app title="Nás tým">
    <x-hero image="" motto="Náš Tým"/>
    <section class="flex flex-col justify-center gap-8 flex-wrap">
        <h2>Plavecký klub Slávia VŠ Plzeň z.s.</h2>
        <ul>
            <li>Náměstí Gen. Píky 42326 00 Plzeň</li>
            <li>Tel.: 377 240 306 / 309(informace - recepce)</li>
            <li>IČ: 49779133</li>
            <li>DIČ: CZ49779133</li>
            <li>e-mail: info@bazenslovany.cz</li>
        </ul>
        <h2>Kontakty </h2>
        <section class="flex flex-row justify-center gap-8 flex-wrap">
            <x-contact-elem
                id=""
                :img-url="getAsset('kotora_img.png')"
                name="Tomáš Kotora"
                role="Vedoucí plaveckého bazénu"
                phone="+420 789 131 222"
                email="kotora@email.cz"
            />
            <x-contact-elem
                id=""
                :img-url="getAsset('kotora_img.png')"
                name="Tomáš Kotora"
                role="Vedoucí plaveckého bazénu"
                phone="+420 789 131 222"
                email="kotora@email.cz"
            />
            <x-contact-elem
                id=""
                :img-url="getAsset('kotora_img.png')"
                name="Tomáš Kotora"
                role="Vedoucí plaveckého bazénu"
                phone="+420 789 131 222"
                email="kotora@email.cz"
            />
            <x-contact-elem
                id=""
                :img-url="getAsset('kotora_img.png')"
                name="Tomáš Kotora"
                role="Vedoucí plaveckého bazénu"
                phone="+420 789 131 222"
                email="kotora@email.cz"
            />
        </section>
    </section>

</x-layouts.app>
