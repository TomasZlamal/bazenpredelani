<x-layouts.app title="Ceník">
    <x-hero :image="getImage('recepce.jpg')" motto="Ceník"/>
    <x-page-section narrower>
        <div class="mb-12">
            <h2 class="h3">Obsah</h2>
            <ul class="*:list-none *:ml-0">
                <li>
                    <h3 class="h4">Bazén</h3>
                    <ol>
                        <li>
                            <a href="#vstupne">
                                <span class="title"></span>
                                <span class="page">Jednorázové vstupné</span>
                            </a>
                        </li>
                        <li>
                            <a href="#naplavani">
                                <span class="title"></span>
                                <span class="page">Permanentka</span>
                            </a>
                        </li>
                        <li>
                            <a href="#slevove">
                                <span class="title"></span>
                                <span class="page">Slevové vstupné</span>
                            </a>
                        </li>
                        <li>
                            <a href="#rodinne">
                                <span class="title"></span>
                                <span class="page">Rodinné vstupné</span>
                            </a>
                        </li>
                        <li>
                            <a href="#zdarma">
                                <span class="title"></span>
                                <span class="page">Vstup zdarma</span>
                            </a>
                        </li>
                    </ol>
                <li>
                    <h3 class="h4">Wellness</h3>
                    <ol>
                        <li>
                            <a href="#permanentkasauna">
                                <span class="title"></span>
                                <span class="page">Permanentka</span>
                            </a>
                        </li>
                        <li>
                            <a href="#jednorazovesauna">
                                <span class="title"></span>
                                <span class="page">Jednorázový vstup</span>
                            </a>
                        </li>
                    </ol>
                </li>
            </ul>
        </div>
        
        
        <h2 id="vstupne">Jednorázové vstupné do bazénu</h2>
        <h3>Po zavření vnitřního bazénu</h3>
        <div class="overflow-x-auto">
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
        </div>
        <h3>Před zavřením vnitřního bazénu</h3>
        <div class="overflow-x-auto">
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
        </div>
    </x-page-section>

    <x-page-section highlighted narrower>
        <h2 id="naplavani">Permanentka na plavání</h2>
        <p>Permanentní vstupenka nabízí <strong>zvýhodněné vstupné do bazénu</strong>.</p>
        <p>Vstupné je čerpané po minutách. Je platné v plaveckém areálu bazén Slovany i bazén Lochotín. <strong>Neplatí do sauny na Slovanech, je určena především na plavání</strong></p>
        <p>Cena permanentky je 1,- Kč / minuta s možností dobití od 500 minut (500,- Kč) a více. Např. 1 hodina plavání = 60,- Kč.</p>
        <p>Platnost permanentky je 1 rok od data vystavení či jejího znovunabití.</p>
        <p> Při zakoupení permanentky si je nutno vyzvednout oproti záloze 100,- Kč elektronický čip, záloha je klientovi vrácena, pokud vrátí nepoškozený čip včetně náramku.</p>
        <p>Permanentní vstupenka je přenosná, ale v jeden okamžik na ní může do areálu vstoupit pouze 1 osoba.</p>
        <p>V ceně vstupného je umožněn vstup do atrakcí, parních komor, brouzdaliště, malého bazénu, venkovního areálu = nafukovací haly, a to v jejich uvedených provozních hodinách.</p>
        <p>Permanentka na plavání má červený pásek a červenobílý čip.</p>

    </x-page-section>
    <x-page-section narrower>
        <h2 id="slevove"> Slevové vstupné do bazénu</h2>
        <p>Platí pro:</p>
        <ul>
            <li>děti do 122cm</li>
            <li>studující řádného studia od 15 do 26 let věku - nutno prokázat žákovským nebo studentským průkazem současně s obč. průkazem (JIS karta, ISIC).</li>
            <li> důchodce – nutno se prokázat potvrzením o pobírání starobního důchodu</li>
            <li>senioři od 60 let věku – nutno věk prokázat občanským průkazem</li>
            <li>držitele průkazu ZTP - nutno předložit platný průkaz ZTP</li>
            <li>držitele zlaté Jánského plakety - nutno předložit průkaz držitele</li>
        </ul>
    </x-page-section>
    <x-page-section narrower highlighted>
        <h2 id="rodinne">Rodinné vstupné do bazénu</h2>
        <p>Platí pro:</p>
        <ul>
            <li>2 dospělé a 2 děti od 122 cm do 15ti let</li>
        </ul>
    </x-page-section>
    <x-page-section narrower>
        <h2 id="zdarma">Vstup zdarma do bazénu</h2>
        <p>Je možné pro následující skupiny:</p>
        <ul>
            <li>dětem od 1 roku do 122 cm - pouze v doprovodu osoby starší 18 let věku</li>
            <li>jednomu dítěti od 122 cm do 15 let věku v rodinném vstupném</li>
            <li>držitelům průkazu ZTP/P včetně 1 osoby doprovodu starší 18 let věku – nutno předložit platný průkaz ZTP/P spolu s občanským průkazem</li>
            <li>imobilním občanům včetně 1 osoby doprovodu starší 18 let věku</li>
            <li>seniorům od pondělí do pátku v době od 9:00 do 11:00 hodin mimo svátků a školních prázdnin - pouze prostřednictvím platné Plzeňské karty pro občany s trvalým pobytem na území města Plzně. Trvalý pobyt je nutné ověřit prostřednictvím OP. Na kalednářní rok má každý k dispozici 40 vstupů.</li>
        </ul>
        <p>
Po opuštění areálu jsou všechny jednorázové vstupenky neplatné.
</p>
<p>
VSTUP DĚTÍ DO 12TI LET JE MOŽNÝ POUZE V DOPROVODU OSOBY STARŠÍ 18TI LET. NA VYŽÁDÁNÍ JE NUTNÉ VĚK PROKÁZAT PŘI ZAKOUPENÍ VSTUPENKY.
</p>
<p>
V případě nepříznivého počasí se zakoupené vstupné nevrací.
</p>
    </x-page-section>
    <x-page-section narrower highlighted>
        <h2 id="permanentkasauna">Permanentka do sauny</h2>
        <p>Permanentní vstupenka - čerpání po minutách. Je platná v sauně bazénu Slovany za cenu 2,- Kč / minuta s možností dobití od 500 minut (1000,- Kč) a více. Např. 60 min = 120,- Kč</p>
        <p>
Platnost permanentky je 1 rok od data vystavení či jejího znovunabití.
</p>
<p>

Při zakoupení permanentky si je nutno vyzvednout oproti záloze 100,- Kč elektronický čip, záloha je klientovi vrácena, pokud vrátí nepoškozený čip včetně náramku.
</p>
<p>
Permanentní vstupenka je přenosná, ale v jeden okamžik na ní může do sauny vstoupit pouze 1 osoba.
</p>
<p>
V ceně permanentní vstupenky je zahrnuto zapůjčení prostěradla na dobu pobytu v sauně (prostěradlo či ručník navíc 50,- Kč). Zapůjčení prostěradla je bez zálohy.

Permanentka do sauny má červený pásek a černý čip s klubovou nálepkou nebo žlutý pásek a bílý čip s klubovou nálepkou.
</p>
<p>
ODSTOUPENÍ OD KUPNÍ SMLOUVY PŘI ZAKOUPENÍ ZBOŽÍ JE MOŽNÉ DO 14 DNŮ BEZ UDÁNÍ DŮVODU. POUZE ZBOŽÍ V NEPORUŠENÉM STAVU, TZN. U PERMANENTEK BEZ JEDINÉHO VSTUPU DO BAZÉNU NEBO SAUNY.
</p>
    </x-page-section>
    <x-page-section narrower>
        <h2 id="jednorazovesauna">Jednorázové vstupné do sauny</h2>
        <div class="overflow-x-auto">
            <table class="table-primary first-cell-highlight w-full">
                <tr>
                    <th></th>
                    <th>do 1 hodiny</th>
                    <th>do 1.5 hodiny</th>
                    <th>do 2 hodin</th>
                </tr>
                <tr>
                    <td>plné</td>
                    <td>100kč</td>
                    <td>130kč</td>
                    <td>180kč</td>
                </tr>
            </table>
        </div>

        <p>Pro všechny výše uvedené tarify a tarify organizací platí následující pravidlo:
Za každou překročenou minutu je účtován doplatek 2,- Kč / minuta (při pobytu v bazénu) nebo 4,- Kč / minuta (při pobytu v sauně), a to bez ohledu na to, zda se jedná o zakoupené plné či slevové vstupné.

Za ztrátu jakéhokoliv čipového náramku či karty je účtován poplatek 200,- Kč. Za nalezení a vrácení čipu po době pobytu v areálu se uhrazená částka nevrací.
V případě opětovného nálezu čipového náramku či karty v době pobytu nebo nouzového otevření skříňky je účtován pouze manipulační poplatek 100,- Kč.</p>
    </x-page-section>


{{--        <div class="flex flex-col items-center bg-bs-yellow py-10">--}}
{{--            <h3 class=" text-center">Pravidla pro výše uvedené tarify </h3>--}}
{{--            <p class="w-[80vw]">Za každých překročených 15 minut je účtován doplatek 20,- Kč (při pobytu v bazénu) nebo 40,- Kč (při pobytu v sauně), a to bez ohledu na to, zda se jedná o zakoupené plné či slevové vstupné. Překročení není možné uhradit další zakoupenou hodinou.--}}

{{--Za ztrátu jakéhokoliv čipového náramku či karty je účtován poplatek 200,- Kč. Za nalezení a vrácení čipu po době pobytu v areálu se uhrazená částka nevrací.--}}

{{--V případě opětovného nálezu čipového náramku či karty v době pobytu nebo nouzového otevření skříňky je účtován pouze manipulační poplatek 100,- Kč.</p>--}}
{{--        </div>--}}
</x-layouts.app>
