<x-layouts.app title="Ceník">
    <x-hero :image="getImage('recepce.jpg')" motto="Ceník"/>
    <x-page-section narrower>
        <h2>Jednorázové vstupné</h2>
        <table class="table-primary first-cell-highlight w-full">
            <tr>
                <th>Časy</th>
                <th>Plnocenné</th>
                <th>Slevové</th>
                <th>Rodinné</th>
            </tr>
            <tr>
                <td>1.5 hodin</td>
                <td>100kč</td>
                <td>100kč</td>
                <td>100kč</td>
            </tr>
            <tr>
                <td>3 hodiny</td>
                <td>100kč</td>
                <td>100kč</td>
                <td>100kč</td>
            </tr>
            <tr>
                <td>Celodenní</td>
                <td>100kč</td>
                <td>100kč</td>
                <td>100kč</td>
            </tr>
        
        </table>
    </x-page-section>
    <x-page-section highlighted narrower>
        <h2>Permanentka na plavání</h2>
        <p>Permanentní vstupenka nabízí <strong>zvýhodněné vstupné do bazénu</strong>.</p>
        <p>Vstupné je čerpané po minutách. Je platné v plaveckém areálu bazén Slovany i bazén Lochotín. <strong>Neplatí do sauny na Slovanech, je určena především na plavání</strong></p>
        <p>Cena permanentky je 1,- Kč / minuta s možností dobití od 500 minut (500,- Kč) a více. Např. 1 hodina plavání = 60,- Kč.</p>
        <p>Platnost permanentky je 1 rok od data vystavení či jejího znovunabití.</p>
        <p> Při zakoupení permanentky si je nutno vyzvednout oproti záloze 100,- Kč elektronický čip, záloha je klientovi vrácena, pokud vrátí nepoškozený čip včetně náramku.</p>
        <p>Permanentní vstupenka je přenosná, ale v jeden okamžik na ní může do areálu vstoupit pouze 1 osoba.</p>
        <p>V ceně vstupného je umožněn vstup do atrakcí, parních komor, brouzdaliště, malého bazénu, venkovního areálu = nafukovací haly, a to v jejich uvedených provozních hodinách.</p>
        <p>Permanentka na plavání má červený pásek a červenobílý čip.</p>
        
    </x-page-section>
{{--        <div class="flex flex-col items-center bg-bs-yellow py-10">--}}
{{--            <h3 class=" text-center">Pravidla pro výše uvedené tarify </h3>--}}
{{--            <p class="w-[80vw]">Za každých překročených 15 minut je účtován doplatek 20,- Kč (při pobytu v bazénu) nebo 40,- Kč (při pobytu v sauně), a to bez ohledu na to, zda se jedná o zakoupené plné či slevové vstupné. Překročení není možné uhradit další zakoupenou hodinou.--}}

{{--Za ztrátu jakéhokoliv čipového náramku či karty je účtován poplatek 200,- Kč. Za nalezení a vrácení čipu po době pobytu v areálu se uhrazená částka nevrací.--}}

{{--V případě opětovného nálezu čipového náramku či karty v době pobytu nebo nouzového otevření skříňky je účtován pouze manipulační poplatek 100,- Kč.</p>--}}
{{--        </div>--}}
</x-layouts.app>
