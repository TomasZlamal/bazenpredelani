<footer class="section bg-bs-blue-1000">
    <div class="max-width-container flex flex-wrap gap-16">
        <div class="flex flex-row flex-wrap gap-2 items-center">
            <p class="h4 text-white">Bazén Slovany |</p>
            <p class="mt-[0.17rem]">Největší plavecký areál v Plzeňském kraji</p>
        </div>
        
        <div class="flex md:flex-nowrap flex-wrap bg-bs-blue-950 rounded-lg overflow-clip w-full">
            <div class="w-full flex-grow-1 min-h-72">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.6196942546085!2d13.395377877099397!3d49.73678273849129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1d869ae2447%3A0xa96592aa23ab41c6!2sBaz%C3%A9n%20Slovany!5e0!3m2!1scs!2scz!4v1734177800025!5m2!1scs!2scz"
                    width="100%"
                    height="100%"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            <div class="py-8 px-10 w-80">
                <h4 class="mt-0 mb-4">Kontakt</h4>
                <address class="flex md:gap-4 gap-x-8 gap-y-4 md:flex-col flex-row flex-wrap">
                    <dl class="flex flex-col">
                        <dt><b>Recepce</b></dt>
                        <dd><a href="tel:+420377240309">+420 377 240 309</a></dd>
                    </dl>
                    <dl class="flex flex-col">
                        <dt><b>Informace</b></dt>
                        <dd><a href="tel:+420377240306">+420 377 240 306</a></dd>
                    </dl>
                    <div class="flex flex-col">
                        <p>Náměstí Gen. Píky 42</p>
                        <p>326 00 Plzeň</p>
                        <a href="mailto:info@bazenslovany.cz" class="underline mt-2">info&#64;bazenslovany.cz</a>
                    </div>
                </address>
            </div>
        </div>
        
        <nav aria-label="menu-zápatí">
            <ul class="flex flex-row flex-wrap md:gap-24 gap-10 gap-y-6">
                <li>
                    <ul class="flex flex-col gap-2">
                        <x-footer.heading>Areál bazénu</x-footer.heading>
                        
                        <x-footer.link :href="route('bazen')">Bazénový svět</x-footer.link>
                        <x-footer.link :href="route('wellness')">Wellness</x-footer.link>
                        <x-footer.link :href="route('ubytovani')">Ubytování</x-footer.link>
                    </ul>
                </li>
                <li>
                    <ul class="flex flex-col gap-2">
                        <x-footer.heading>Sport</x-footer.heading>
                        <x-footer.link href="https://www.plaveckaskolaplzen.cz/plavecka-skola-plzen-slovany/">Plavecká škola</x-footer.link>
                        <x-footer.link href="https://www.plaveckyklubplzen.cz/">Plavecký klub</x-footer.link>
                        <x-footer.link href="https://www.bazenlochotin.cz/">Bazén Lochotín</x-footer.link>
                    </ul>
                </li>
                <li>
                    <ul class="flex flex-col gap-2">
                        <x-footer.heading>Informace</x-footer.heading>
                        
                        <x-footer.link href="/dostupnost">Máme otevřeno?</x-footer.link>
                        <x-footer.link href="/dostupnost#oteviraci_doba">Otevírací doba</x-footer.link>
                        <x-footer.link href="/caste-dotazy">Časté dotazy</x-footer.link>
                        <x-footer.link href="/dostupnost#kalendar_akci">Kalendář akcí</x-footer.link>
                        <x-footer.link :href="route('cenik')">Ceník</x-footer.link>
                        <x-footer.link :href="route('dokumenty')">Dokumenty</x-footer.link>
                    </ul>
                </li>
                <li>
                    <ul class="flex flex-col gap-2">
                        <x-footer.heading>Služby</x-footer.heading>
                        
                        <x-footer.link :href="route('sluzby')">Všechny služby</x-footer.link>
                        <x-footer.link :href="route('ubytovani')">Ubytování</x-footer.link>
                        <x-footer.link :href="route('modni-salon')">Módní salón</x-footer.link>
                        <x-footer.link href="https://www.fitnesscity.cz/">Fitness City</x-footer.link>
                        <x-footer.link href="https://nabazenuplzen.cz/">Restaurace</x-footer.link>
                    </ul>
                </li>
                <li>
                    <ul class="flex flex-col gap-2">
                        <x-footer.heading>Kontakty</x-footer.heading>
                        <x-footer.link :href="route('kontakt')">Náš tým</x-footer.link>
                        <x-footer.link href="https://www.facebook.com/bazen.slovany">Facebook</x-footer.link>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="flex flex-wrap w-full justify-between gap-x-16 gap-y-1 p-6 bg-bs-blue-950 rounded-xl">
            <p class="text-bs-grey-300">
                &copy; Bazén Slovany, {{date('Y')}}. Všechna práva vyhrazena.
            </p>
            <p class="text-bs-grey-300">
                Vytvořili
                <a class="underline text-bs-grey-300 visited:text-bs-grey-300 hover:text-bs-gray-200 transition-colors" href="https://www.skoula.com">Michal Škoula</a>,
                <a class="underline text-bs-grey-300 visited:text-bs-grey-300 hover:text-bs-gray-200 transition-colors" href="https://www.zlamal.tech">Tomáš Zlámal</a>.
            </p>
        </div>
    </div>
</footer>