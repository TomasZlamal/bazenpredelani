<x-layout>
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
                <article class="lg:first:col-span-1 md:first:col-span-2 rounded-lg overflow-hidden shadow-md">
                    <a href="#" class="block overflow-hidden m-0">
                        <img src="/assets/post-img.png" alt="Post image" class="aspect-16/10 w-full scale-[1.01] hover:scale-110 transition-transform rounded-none" />
                    </a>
                    <div class="bg-bs-grey-150 px-6 pt-4 pb-6 h-full">
                        <h3 class="mb-2">Zavřeno lol</h3>
                        <p>Bazén Slovany s potěšením oznamuje otevření nového venkovního areálu. Návštěvníci se mohou těšit na moderní plavecké dráhy, relaxační zóny a různé vodní atrakce, které zajistí zábavu pro celou rodinu. Přijďte si užít letní pohodu v novém prostředí!</p>
                        <a class="icon-link-arrow inline-block text-bs-blue-700 hover:text-bs-blue-800 visited:text-bs-blue-800 active:text-bs-blue-800 hover:underline font-medium mt-3 motion-reduce:transition-none" href="#">Zjistěte více</a>
                    </div>
                </article>
                <article class="lg:first:col-span-1 md:first:col-span-2 rounded-lg overflow-hidden shadow-md">
                    <a href="#" class="block overflow-hidden m-0">
                        <img src="/assets/post-img.png" alt="Post image" class="aspect-16/10 w-full scale-[1.01] hover:scale-110 transition-transform rounded-none" />
                    </a>
                    <div class="bg-bs-grey-150 px-6 pt-4 pb-6 h-full">
                        <h3 class="mb-2">Tohle se aktuálně děje</h3>
                        <p>Bazén Slovany s potěšením oznamuje otevření nového venkovního areálu. Návštěvníci se mohou těšit Návštěvníci se mohou těšit Návštěvníci se mohou těšit na moderní plavecké dráhy, relaxační zóny a různé vodní atrakce, které zajistí zábavu pro celou rodinu. Přijďte si užít letní pohodu v novém prostředí!</p>
                        <a class="icon-link-arrow inline-block text-bs-blue-700 hover:text-bs-blue-800 visited:text-bs-blue-800 active:text-bs-blue-800 hover:underline font-medium mt-3 motion-reduce:transition-none" href="#">Zjistěte více</a>
                    </div>
                </article>
                <article class="lg:first:col-span-1 md:first:col-span-2 rounded-lg overflow-hidden shadow-md">
                    <a href="#" class="block overflow-hidden m-0">
                        <img src="/assets/plavec.png" alt="Post image" class="aspect-16/10 object-cover w-full scale-[1.01] hover:scale-110 transition-transform rounded-none" />
                    </a>
                    <div class="bg-bs-grey-150 px-6 pt-4 pb-6 h-full">
                        <h3 class="mb-2">Tohle se aktuálně děje</h3>
                        <p>Bazén Slovany s potěšením oznamuje otevření nového venkovního areálu.</p>
                        <a class="icon-link-arrow inline-block text-bs-blue-700 hover:text-bs-blue-800 visited:text-bs-blue-800 active:text-bs-blue-800 hover:underline font-medium mt-3 motion-reduce:transition-none" href="#">Zjistěte více</a>
                    </div>
                </article>
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
                <div class="mb-4 last-of-type:mb-0 rounded-lg shadow-xs">
                    <input type="checkbox" id="faq1" class="peer hidden" />
                    <label role="button" for="faq1" class="icon-faq block relative cursor-pointer font-medium text-bs-blue-900 bg-bs-blue-200 bg-opacity-45 py-4 px-4 peer-checked:rounded-t-lg peer-checked:rounded-b-none rounded-lg peer-checked:border-b-bs-blue-200 peer-checked:border-b-2"> Jaká je teplota vody v bazénech? </label>
                    <div class="p-4 hidden peer-checked:block bg-bs-blue-200 bg-opacity-30 rounded-b-lg">
                        <p class="text-bs-blue-950">Velký vnitřní bazén je vytápěný na 27˚C, malý bazén na 29˚C. Venkovní bazén se pohybuje kolem 24 - 26˚C, dle počasí.</p>
                    </div>
                </div>
                <div class="mb-4 last-of-type:mb-0 rounded-lg shadow-xs">
                    <input type="checkbox" id="faq2" class="peer hidden" />
                    <label role="button" for="faq2" class="icon-faq block relative cursor-pointer font-medium text-bs-blue-900 bg-bs-blue-200 bg-opacity-45 py-4 px-4 peer-checked:rounded-t-lg peer-checked:rounded-b-none rounded-lg peer-checked:border-b-bs-blue-200 peer-checked:border-b-2"> Je bazén momentálně otevřený? </label>
                    <div class="p-4 hidden peer-checked:block bg-bs-blue-200 bg-opacity-30 rounded-b-lg">
                        <p class="text-bs-blue-950">Naše otevírací doba je 8:00 - 22:00 každý den. O svátcích nebo jiných událostech se však může lišit, a proto raději zkontrolujte dostupnost.</p>
                    </div>
                </div>
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
                <figure class="relative rounded-lg overflow-clip lg:col-start-1 lg:col-end-4 lg:row-start-1 lg:row-end-2 md:col-start-1 md:col-end-4 md:row-start-1 md:row-end-2 md:aspect-[initial] aspect-16/9">
                    <a href="{{ url('/bazen#vnitrni')}}" class="group">
                        <img src="/assets/bazen.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Vnitřní bazén</h3>
                        </figcaption>
                    </a>
                </figure>

                <figure class="relative rounded-lg overflow-clip lg:col-start-4 lg:col-end-6 lg:row-start-1 lg:row-end-2 md:col-start-4 md:col-end-6 md:row-start-1 md:row-end-2 md:aspect-[initial] aspect-16/9">
                    <a href="{{ url('/bazen#divoka')}}" class="group">
                        <img src="/assets/divoka-reka.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Divoká řeka</h3>
                        </figcaption>
                    </a>
                </figure>

                <figure class="relative rounded-lg overflow-clip lg:col-start-6 lg:col-end-8 lg:row-start-1 lg:row-end-3 md:col-start-1 md:col-end-3 md:row-start-2 md:row-end-4 md:aspect-[initial] aspect-16/9">
                    <a href="https://www.plaveckyklubplzen.cz/" class="group">
                        <img src="/assets/plavec.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Plavecká škola a klub Slávia</h3>
                        </figcaption>
                    </a>
                </figure>

                <figure class="relative rounded-lg overflow-clip lg:col-start-8 lg:col-end-11 lg:row-start-1 lg:row-end-1 md:col-start-3 md:col-end-6 md:row-start-2 md:row-end-3 md:aspect-[initial] aspect-16/9">
                    <a href="{{ url('/ubytovani')}}" class="group">
                        <img src="/assets/ubytovani.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Ubytování</h3>
                        </figcaption>
                    </a>
                </figure>

                <figure class="relative rounded-lg overflow-clip lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3 md:col-start-3 md:col-end-6 md:row-start-3 md:row-end-4 md:aspect-[initial] aspect-16/9">
                    <a href="{{ url('/sauna')}}" class="group">
                        <img src="/assets/sauna-para.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Sauna a pára</h3>
                        </figcaption>
                    </a>
                </figure>

                <figure class="relative rounded-lg overflow-clip lg:col-start-3 lg:col-end-6 lg:row-start-2 lg:row-end-3 md:col-start-1 md:col-end-4 md:row-start-4 md:row-end-5 md:aspect-[initial] aspect-16/9">
                    <a href="{{ url('/bazen#vnitrni')}}" class="group">
                        <img src="/assets/wellness.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Wellness</h3>
                        </figcaption>
                    </a>
                </figure>

                <figure class="relative rounded-lg overflow-clip lg:col-start-8 lg:col-end-11 lg:row-start-2 lg:row-end-3 md:col-start-4 md:col-end-6 md:row-start-4 md:row-end-5 md:aspect-[initial] aspect-16/9">
                    <a href="https://www.bazenlochotin.cz/" class="group">
                        <img src="/assets/lochotin.png" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        <figcaption class="absolute flex items-end justify-center h-full bottom-0 left-0 w-full text-center p-3">
                            <h3 class="text-h4 m-0 font-semibold text-white">Bazén Lochotín</h3>
                        </figcaption>
                    </a>
                </figure>
            </div>
            <div class="flex justify-center">
                <a class="inline-block md:w-[unset] text-center w-full text-bs-white hover:text-bs-white active:text-bs-white visited:text-bs-white bg-bs-blue-600 hover:bg-bs-blue-700 active:bg-bs-blue-800 font-normal px-20 py-3 rounded-full no-underline transition-all motion-reduce:transition-none" href="{{ url('/bazen')}}">Objevte možnosti</a>
            </div>
        </div>
    </section>

</x-layout>
