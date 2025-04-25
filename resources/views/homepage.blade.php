<x-layouts.app title="Domů">
    <x-hero-homepage/>
        <section id="updates">
        <div class="max-width-container">
            <div class="flex gap-4 flex-wrap justify-between items-end mb-6">
                <div>
                    <p class="mb-[-0.6rem]">Co je nového?</p>
                    <h2>Aktuality</h2>
                </div>
                <div class="flex flex-wrap gap-3 md:order-2 order-1">
                    <p class="md:inline-block flex text-bs-white bg-bs-blue-600 md:px-8 md:py-4 rounded-sm transition-colors flex-col px-4 py-3 shadow-lg"><b>Bazén:</b> Vyšší vytíženost</p>
                    <p class="md:inline-block flex text-bs-white bg-bs-blue-700 md:px-8 md:py-4 rounded-sm transition-colors flex-col px-4 py-3 shadow-lg"><b>Sauna:</b> 10/30 obsazeno</p>
                </div>
            </div>
            <div class="grid gap-6 lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                <x-article url="#" img-alt-text="" img-url="">
                    <x-slot:title>Nadpis</x-slot:title>
                    <x-slot:excerpt>
                        Bazén Slovany s potěšením oznamuje otevření nového venkovního areálu. Návštěvníci se mohou těšit na moderní plavecké dráhy, relaxační zóny a různé vodní atrakce, které zajistí zábavu pro celou rodinu. Přijďte si užít letní pohodu v novém prostředí!
                    </x-slot:excerpt>
                </x-article>
                <x-article url="#" img-alt-text="" img-url="">
                    <x-slot:title>Tohle se aktuálně děje</x-slot:title>
                    <x-slot:excerpt>
                        Bazén Slovany s potěšením oznamuje otevření nového venkovního areálu. Návštěvníci se mohou těšit na moderní plavecké dráhy, relaxační zóny a různé vodní atrakce, které zajistí zábavu pro celou rodinu. Přijďte si užít letní pohodu v novém prostředí!
                    </x-slot:excerpt>
                </x-article>
                <x-article url="#" img-alt-text="Alt text" img-url="/assets/post-img.png">
                    <x-slot:title>Nadpis</x-slot:title>
                    <x-slot:excerpt>
                        Bazén Slovany s potěšením oznamuje otevření nového venkovního areálu.
                    </x-slot:excerpt>
                </x-article>
            </div>
        </div>
    </section>
    <section id="faq" role="doc-qna" class="bg-bs-blue-150">
        <div class="max-width-container grid lg:grid-cols-5 grid-cols-1 gap-x-16 gap-y-8">
            <div class="lg:col-span-2">
                <h2 class="mt-0">Časté dotazy</h2>
                <p>Máte otázky? Zavolejte nám na recepci a rádi vám poradíme.</p>
            </div>
            <div class="lg:col-span-3 col-span-full w-full">
                <x-faq-card
                    question="Jaká je teplota vody v bazénu?"
                    answer="Ne moc dlouhá odpověď"
                />
                <x-faq-card
                    question="Je možné u bazénu parkovat?"
                    answer="Ne moc dlouhá odpověď"
                />
                <x-faq-card
                    question="Jaká je teplota vody v bazénu?"
                    answer="Ne moc dlouhá odpověď"
                />
            </div>
        </div>
    </section>

    <section id="discover">
        <div class="max-width-container flex flex-col justify-center gap-16">
            <div class="flex flex-col">
                <h2 class="text-center mb-0">Co u nás najdete?</h2>
                <p class="text-center">Podívejte se, co všechno můžete zažít u nás v areálu.</p>
            </div>

            <div class="grid lg:aspect-8/3 lg:grid-cols-10 lg:grid-rows-2 md:grid-cols-5 md:grid-rows-showcase-grid grid-cols-1 sm:grid-rows-1 gap-8 w-full">
                <x-discover-bento-card
                    class="lg:col-start-1 lg:col-end-4 lg:row-start-1 lg:row-end-2 md:col-start-1 md:col-end-4 md:row-start-1 md:row-end-2 md:aspect-[initial] aspect-16/9"
                    href="/bazen#vnitrni"
                    :img-url="getImage('bazen_vnitrni_3.jpg')"
                    caption="Vnitřní bazén"
                />

                <x-discover-bento-card
                    class="lg:col-start-4 lg:col-end-6 lg:row-start-1 lg:row-end-2 md:col-start-4 md:col-end-6 md:row-start-1 md:row-end-2 md:aspect-[initial] aspect-16/9"
                    href="bazen#orinoko"
                    :img-url="getImage('divoka_reka.jpg')"
                    caption="Divoká řeka"
                />

                <x-discover-bento-card
                    class="lg:col-start-6 lg:col-end-8 lg:row-start-1 lg:row-end-3 md:col-start-1 md:col-end-3 md:row-start-2 md:row-end-4 md:aspect-[initial] aspect-16/9 "
                    href="https://www.plaveckyklubplzen.cz/"
                    :img-url="getImage('plavec.png')"
                    caption="Plavecká škola a klub Slávia"
                    image-adjustments="object-[65%_50%]"
                />

                <x-discover-bento-card
                    class="lg:col-start-8 lg:col-end-11 lg:row-start-1 lg:row-end-1 md:col-start-3 md:col-end-6 md:row-start-2 md:row-end-3 md:aspect-[initial] aspect-16/9"
                    href="/ubytovani"
                    :img-url="getImage('ubytovani.png')"
                    caption="Ubytování"
                />

                <x-discover-bento-card
                    class="lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3 md:col-start-3 md:col-end-6 md:row-start-3 md:row-end-4 md:aspect-[initial] aspect-16/9"
                    href="/sauna"
                    :img-url="getImage('sauna_a_para.jpg')"
                    caption="Sauna a pára"
                />

                <x-discover-bento-card
                    class="lg:col-start-3 lg:col-end-6 lg:row-start-2 lg:row-end-3 md:col-start-1 md:col-end-4 md:row-start-4 md:row-end-5 md:aspect-[initial] aspect-16/9"
                    href="/bazen#vnitrni"
                    :img-url="getImage('wellness.jpg')"
                    caption="Wellness"
                />

                <x-discover-bento-card
                    class="lg:col-start-8 lg:col-end-11 lg:row-start-2 lg:row-end-3 md:col-start-4 md:col-end-6 md:row-start-4 md:row-end-5 md:aspect-[initial] aspect-16/9"
                    href="https://www.bazenlochotin.cz/"
                    :img-url="getAsset('/misc/plavecka-skola.png')"
                    caption="Plavecká škola"
                    image-adjustments="object-scale-down"
                />
            </div>
            <div class="flex justify-center">
                <x-href-button :href="route('bazen')" class="px-20 max-w-full">Objevte možnosti</x-href-button>
            </div>
        </div>
    </section>
</x-layouts.app>
