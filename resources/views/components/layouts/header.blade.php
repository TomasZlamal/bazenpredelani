<header>
    <nav aria-label="hlavni-menu" id="nav" class="fixed w-full z-20 py-4 lg:px-12 md:px-8 px-4 transition-all duration-300 translate-y-0 bg-bs-white">
        <div class="mx-auto max-w-content">
            <div class="flex h-16 items-center justify-between">
                <a class="mb-0" href="{{ url('/') }}">
                    <div class="flex items-center">
                        <div class="flex shrink-0 items-center">
                            <img class="h-16 w-auto" src="{{config('bazenslovany.logo_url')}}" alt="{{config('bazenslovany.logo_alt')}}" />
                        </div>
                    </div>
                </a>
                <div class="flex items-center justify-center">
                    <div class="hidden nav:ml-6 nav:block">
                        <div class="flex space-x-4">
                            <ul class="flex justify-between gap-8 mb-0">
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="dostupnost">Dostupnost</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="../bazen">Bazénový svět</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="sauna">Sauna a pára</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="https://www.plaveckyklubplzen.cz/">Plavecký klub</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="https://www.plaveckaskolaplzen.cz/plavecka-skola-plzen-slovany/">Plavecká škola</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="../cenik">Ceník</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="ubytovani">Ubytování</a></li>
                                <li class="list-none"><a class="nav-item no-underline hover:underline list-none text-bs-black hover:text-bs-grey-900 active:text-bs-grey-800 visited:text-black font-normal" href="ostatnisluzby">Ostatní služby</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 bg-black focus:outline-hidden nav:hidden" aria-controls="mobile-menu" aria-expanded="false">
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