<x-layouts.app title="Bazénový svět">
    <x-hero image="bazen.png" motto="Bazénový svět"/>
    <x-showcase-section
        heading="Velký bazén"
        description="Užijte si spoustu zábavy v našem velkém bazénu! S deseti plaveckými drahami, mimoúrovňovou tribunou o kapacitě 350 diváků a vodě o teplotě 27˚C teplé vodě si pobyt jistě moc užijete!"
        :img-url="getAsset('bazen.png')"
        img-alt=""
    >
        <x-showcase-block
            highlight="50 x 25m"
            text="Velikost bazénu"
        />
        <x-showcase-block
            highlight="2,1m"
            text="Největší hloubka"
        />
        <x-showcase-block
            highlight="10"
            text="Plaveckých drah"
        />
        <x-showcase-block
            highlight="27˚C"
            text="Teplota bazénu"
        />
    </x-showcase-section>
</x-layouts.app>
