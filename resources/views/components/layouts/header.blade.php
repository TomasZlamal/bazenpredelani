<header>
    <nav aria-label="hlavni-menu" id="nav" class="fixed w-full z-20 py-4 lg:px-12 md:px-8 px-4 transition-all duration-300 translate-y-0 bg-bs-white">
        <div class="mx-auto max-w-content">
            <div class="flex h-16 items-center justify-between">
                <a class="mb-0" href="{{ url('/') }}">
                    <div class="flex items-center">
                        <div class="flex shrink-0 items-center">
                            <img class="h-16 w-auto" src="{{config('bazenslovany.logo.url')}}" alt="{{config('bazenslovany.logo.alt')}}" />
                        </div>
                    </div>
                </a>
                <div class="flex items-center justify-center">
                    <div class="hidden nav:ml-6 nav:block">
                        <div class="flex space-x-4">
                            <ul class="flex justify-between gap-8 mb-0">
                                <x-header-link-desktop href="{{ route('dostupnost') }}">Dostupnost</x-header-link-desktop>
                                <x-header-link-desktop href="{{ route('bazen') }}">Bazénový svět</x-header-link-desktop>
                                <x-header-link-desktop href="{{ route('wellness') }}">Wellness</x-header-link-desktop>
                                <x-header-link-desktop href="{{ 'https://www.plaveckyklubplzen.cz/'}}">Plavecký klub</x-header-link-desktop>
                                <x-header-link-desktop href="{{ 'https://www.plaveckaskolaplzen.cz/plavecka-skola-plzen-slovany/' }}">Plavecká škola</x-header-link-desktop>
                                <x-header-link-desktop href="{{ route('cenik') }}">Ceník</x-header-link-desktop>
                                <x-header-link-desktop href="{{ route('ubytovani') }}">Ubytování</x-header-link-desktop>
                                <x-header-link-desktop href="{{ route('sluzby') }}">Služby</x-header-link-desktop>
                            
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
                    <x-header-link-mobile href="{{ route('dostupnost') }}">Dostupnost</x-header-link-mobile>
                    <x-header-link-mobile href="{{ route('bazen') }}">Bazénový svět</x-header-link-mobile>
                    <x-header-link-mobile href="{{ route('wellness') }}">Wellness</x-header-link-mobile>
                    <x-header-link-mobile href="https://www.plaveckyklubplzen.cz/">Plavecký klub</x-header-link-mobile>
                    <x-header-link-mobile href="https://www.plaveckaskolaplzen.cz/plavecka-skola-plzen-slovany/">Plavecká škola</x-header-link-mobile>
                    <x-header-link-mobile href="{{ route('cenik') }}">Ceník</x-header-link-mobile>
                    <x-header-link-mobile href="{{ route('ubytovani') }}">Ubytování</x-header-link-mobile>
                    <x-header-link-mobile href="{{ route('sluzby') }}">Služby</x-header-link-mobile>
                </ul>
            </div>
        </div>
    </nav>
</header>