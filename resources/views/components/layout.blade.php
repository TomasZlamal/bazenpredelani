<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bazén Slovany</title>

        <style>

        </style>
        @vite('resources/css/app.css')
        @vite('resources/css/styles.css')
        @vite('resources/js/app.js')

    </head>
    <body>
        <header>
            <nav aria-label="hlavni-menu" id="nav" class="fixed w-full z-20 py-4 lg:px-12 md:px-8 px-4 transition-all duration-300 translate-y-0 bg-bs-white">
                <div class="mx-auto max-w-content">
                    <div class="flex h-16 items-center justify-between">

                                <a class="mb-0" href="{{ url('/') }}">
                        <div class="flex items-center">
                            <div class="flex shrink-0 items-center">
                                    <img class="h-16 w-auto" src="/assets/logo-bazen.png" alt="Bazén Slovany" />
                            </div>

                                </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="hidden nav:ml-6 nav:block">
                                <div class="flex space-x-4">
                                    <ul class="flex justify-between gap-8 mb-0">
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="dostupnost">Dostupnost</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="bazen">Bazénový svět</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="sauna">Sauna a pára</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="https://www.plaveckyklubplzen.cz/">Plavecký klub</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="https://www.plaveckaskolaplzen.cz/plavecka-skola-plzen-slovany/">Plavecká škola</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="cenik">Ceník</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="ubytovani">Ubytování</a></li>
                                        <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="ostatnisluzby">Ostatní služby</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile menu button-->
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 bg-black focus:outline-hidden nav:hidden bg-current" aria-controls="mobile-menu" aria-expanded="false">
                            <!--
                            Icon when menu is closed.

                            Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block size-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
                            Icon when menu is open.

                            Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden size-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="nav:hidden hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-6">
                        <ul class="flex flex-col gap-6 mb-0">
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Dostupnost</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Bazénový svět</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Sauna a pára</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Plavecký klub</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Plavecká škola</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Ceník</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Ubytování</a></li>
                            <li class="list-none"><a class="no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="#">Ostatní služby</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer class="section bg-bs-blue-1000">
            <div class="max-width-container flex flex-wrap gap-16">
                <div class="flex flex-row flex-wrap gap-2 items-center">
                    <h4>Bazén Slovany |</h4>
                    <p class="mt-[0.17rem]">Největší plavecký areál v Plzeňském kraji.</p>
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
                                <dd><a href="#">+420 377 240 309</a></dd>
                            </dl>
                            <dl class="flex flex-col">
                                <dt><b>Informace</b></dt>
                                <dd><a href="#">+420 377 240 306</a></dd>
                            </dl>
                            <div class="flex flex-col">
                                <p>Náměstí Gen. Píky 42</p>
                                <p>326 00 Plzeň</p>
                                <a href="tel:info@bazenslovany.cz" class="underline mt-2">info&#64;bazenslovany.cz</a>
                            </div>
                        </address>
                    </div>
                </div>
                <!-- Tady je předpřipravená CSS třída ico-link-external, která by měla být automaticky daná na plný
                 URI který není bazén, tzn. https://bazenslovany.cz/... BEZ, /blog/post BEZ, https://youtube.com PŘIDAT TŘÍDU -->
                <nav aria-label="menu-zápatí">
                    <ul class="flex flex-row flex-wrap gap-16">
                        <li>
                            <ul class="flex flex-col gap-2">
                                <li><b class="font-bold text-bs-grey-300">Heading</b></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="flex flex-col gap-2">
                                <li><b class="font-bold text-bs-grey-300">Heading</b></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="flex flex-col gap-2">
                                <li><b class="font-bold text-bs-grey-300">Heading</b></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="flex flex-col gap-2">
                                <li><b class="font-bold text-bs-grey-300">Heading</b></li>
                                <li><a href="#" class="icon-external-link">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                                <li><a href="#">Hyperlink</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="flex flex-wrap w-full justify-between gap-x-16 gap-y-1">
                    <p class="text-bs-grey-500">
                        &copy; Bazén Slovany,
                        <?= date('Y') || 2024 ?>
                        Všechna práva vyhrazena.
                    </p>
                    <p class="text-bs-grey-500">
                        Vytvořili
                        <a class="underline text-bs-grey-500 visited:text-bs-grey-500" href="https://www.skoula.com">Michal Škoula</a>
                        a
                        <a class="underline text-bs-grey-500 visited:text-bs-grey-500" href="https://www.zlamal.tech">Tomáš Zlámal</a>.
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
