<x-layouts.app title="Bazénový svět">
    <x-hero :image="getImage('bazen_vnitrni.png')" motto="Bazénový svět"/>
    <x-showcase-section
        id="velky_bazen"
        heading="Velký bazén"
        description="Užijte si spoustu zábavy v našem velkém bazénu! S deseti plaveckými drahami, mimoúrovňovou tribunou o kapacitě 350 diváků a vodě o teplotě 27˚C teplé vodě si pobyt jistě moc užijete!"
        :img-url="getImage('bazen_vnitrni.png')"
        img-alt=""
    >
        <x-showcase-block highlight="50 x 25m" text="Velikost bazénu"/>
        <x-showcase-block highlight="2,1m" text="Největší hloubka"/>
        <x-showcase-block highlight="10" text="Plaveckých drah"/>
        <x-showcase-block highlight="27˚C" text="Teplota bazénu"/>
    </x-showcase-section>
    <x-showcase-section
        id="maly_bazen"
        heading="Malý bazén"
        description="Menší bazén ve vnitřním areálu nabízí teplotu vody přes 29°C. V týdnu je určen pro výuku plavání, o víkednech a svátcích je otevřen veřejnosti."
        :img-url="getImage('maly_bazen_2.jpg')"
        img-alt=""
        highlighted
        inverted
    >
        <x-showcase-block highlight="12 x 8m" text="Velikost bazénu" highlighted/>
        <x-showcase-block highlight="29°C" text="Teplota vody" highlighted/>
        <x-showcase-block highlight="32°C" text="Při výuce batolat" highlighted/>
    </x-showcase-section>
    <x-showcase-section
        id="venkovni_bazen"
        heading="Venkovní bazén"
        description="Nově zastřešený venkovní bazén nabízí osm plaveckých drah, opalovací terasu s lehátky a rozlehlou zahradu. Pro děti je vedle bazénu dětské brouzdaliště a nabízíme také občerstvení."
        :img-url="getImage('venkovni_bazen_shora.png')"
        img-alt=""
    >
        <x-showcase-block highlight="50 x 21m" text="Velikost bazénu" />
        <x-showcase-block highlight="8" text="Plaveckých drah" />
        <x-showcase-block highlight="Terasa" text="S lehátky" />
        <x-showcase-block highlight="3500m2" text="Opalovací plochy" />
        <x-showcase-block highlight="Brouzdaliště" text="Pro děti"/>
    </x-showcase-section>
    <x-showcase-section
        id="tobogan"
        heading="Tobogán"
        description="Největší tobogán v Plzni nabízí 86 metrů skluzavky a vizuálně propracovaný tunel, který vás jistě nadchne. Zákaz vstupu s kovovými předměty."
        :img-url="getImage('tobogan.jpg')"
        img-alt=""
        highlighted
        inverted
    >
        <x-showcase-block highlight="86m" text="Délka tobogánu" highlighted/>
        <x-showcase-block highlight="15m" text="Převýšení" highlighted/>
        <x-showcase-block highlight="27°C" text="Teplota vody" highlighted/>
    </x-showcase-section>
    <x-showcase-section
        id="divoka_reka"
        heading="Divoká řeka"
        description="Divoká řeka Orinoko je 24 metrů dlouhá řeka s protiproudem, plná zvukových, světelných a vodních efektů."
        :img-url="getImage('divoka_reka.jpg')"
        img-alt=""
    >
        <x-showcase-block highlight="32 - 34°C" text="Teplota vody"/>
        <x-showcase-block highlight="1.2m" text="Největší hloubka"/>
        <x-showcase-block highlight="15 x 4m" text="Rozloha bazénu"/>
    </x-showcase-section>
    <x-showcase-section
        id="relaxacni_bazen"
        heading="Relaxační bazén"
        description="Relaxační bazén nabízí masážní lavici, chrlič vody a různé druhy masážních a relaxačních trysek v teplé vodě kolem 32 - 34°C."
        :img-url="getImage('relaxacni_bazen.jpg')"
        img-alt=""
        highlighted
        inverted
    >
        <x-showcase-block highlight="32 - 34°C" text="Teplota vody" highlighted/>
        <x-showcase-block highlight="1.2m" text="Největší hloubka" highlighted/>
        <x-showcase-block highlight="15 x 4m" text="Rozloha bazénu" highlighted/>
    </x-showcase-section>
    <x-showcase-section
        id="parni_komory"
        heading="Parní komory"
        description="Dvě parní komory o teplotě 55°C a aromaterapií. Dostupné přímo od velkého bazénu v ceně vstupného."
        :img-url="getImage('parni_komora.jpg')"
        img-alt=""
    >
        <x-showcase-block highlight="55°C" text="Teplota"/>
        <x-showcase-block highlight="40 - 45°C" text="Při aromaterapii"/>
        <x-showcase-block highlight="Zdarma" text="V ceně vstupného"/>
    </x-showcase-section>
    <x-showcase-section
        id="vyrivky"
        heading="Výřivky"
        description="Dvě výřivky, každá o kapacitě až osmi osob s nastavitelnými tryskami a patnácti minutovým intervalem masáží. Teplota vody je 35°C."
        :img-url="getImage('vyrivky2.jpg')"
        img-alt=""
        highlighted
        inverted
    >
        <x-showcase-block highlight="2" text="Masážní výřivky" highlighted/>
        <x-showcase-block highlight="35°C" text="Teplota vody" highlighted/>
        <x-showcase-block highlight="6-8" text="Kapacita osob" highlighted/>
        <x-showcase-block highlight="3m" text="Průměr výřivky" highlighted/>
    </x-showcase-section>
    <x-showcase-section
        id="brouzdaliste"
        heading="Dětské brouzdaliště"
        description="Po pravé straně při vstupu do bazénu najdete brouzdaliště pro děti s horkou vodou, skluzavkou, vodopádem a herními prvky. "
        :img-url="getImage('brouzdaliste.jpg')"
        img-alt=""
    >
        <x-showcase-block highlight="0,2 - 0,5m" text="Hloubka"/>
        <x-showcase-block highlight="32°C" text="Teplota"/>
        <x-showcase-block highlight="15" text="Maximální kapacita"/>
    </x-showcase-section>
    
    
</x-layouts.app>
