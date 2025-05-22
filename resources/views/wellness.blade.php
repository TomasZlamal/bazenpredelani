<x-layouts.app title="Wellness">
    <x-hero :image="getImage('sauna_a_para.jpg')" motto="Sauna a pára"/>
    <x-page-section id="" narrower>
        <h2>Vstupné do sauny</h2>
        <p>V ceně je započteno zapůjčení 1 ks prostěradla po dobu pobytu v sauně.</p>
        <div class="overflow-x-auto">
            <table class="table-primary w-full max-w-full min-w-[30rem]">
                <tbody>
                <tr>
                    <th>1 hodina</th>
                    <th>1.5 hodiny</th>
                    <th>2 hodiny</th>
                </tr>
                <tr>
                    <td>180,- Kč</td>
                    <td>260,- Kč</td>
                    <td>335,- Kč</td>
                </tr>
                </tbody>
            </table>
        </div>
    </x-page-section>
    <x-page-section highlighted narrower>
        <h2>Provozní hodiny sauny</h2>
        <p>Doba pobytu v sauně začíná příchodem přes turniket a končí odchodem přes turniket.</p>
        <div class="rounded-lg overflow-clip mt-8 mb-6 mt-8 mb-6">
            <div class="overflow-x-auto">
                {{--  Musí to být na parent elementu jinak to neroundne border --}}
                <table class="table-secondary w-full max-w-full min-w-[36rem]">
                    <tbody>
                    <tr>
                        <th>Pondělí</th>
                        <td>MUŽI</td>
                        <td>09,00 - 21,00 hod</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Úterý</th>
                        <td class="without-underline">ŽENY</td>
                        <td class="without-underline">09,00 - 14,00 hod</td>
                    </tr>
                    <tr>
                        <td>SPOLEČNÁ</td>
                        <td>14,00 - 21,00 hod</td>
                    </tr>
                    <tr>
                        <th>Středa</th>
                        <td>SPOLEČNÁ</td>
                        <td>09,00 - 21,00 hod</td>
                    </tr>
                    <tr>
                        <th>Čtvrtek</th>
                        <td>ŽENY</td>
                        <td>09,00 - 21,00 hod</td>
                    </tr>
                    <tr>
                        <th>Pátek</th>
                        <td>SPOLEČNÁ</td>
                        <td>09,00 - 21,00 hod</td>
                    </tr>
                    <tr>
                        <th>Sobota</th>
                        <td>SPOLEČNÁ</td>
                        <td>09,00 - 20,00 hod</td>
                    </tr>
                    <tr>
                        <th>Neděle</th>
                        <td>SPOLEČNÁ</td>
                        <td>09,00 - 20,00 hod</td>
                    </tr>
                    <tr>
                        <th>Státní svátky</th>
                        <td>SPOLEČNÁ</td>
                        <td>09,00 - 20,00 hod</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-page-section>
    <x-page-section narrower>
        <h2>Pravidla provozu sauny</h2>
        <p>Sauna je samostatně placená služba oddělená od vstupu do areálu bazénu.</p>
        <x-callout :type="\App\Enums\CalloutEnum::DANGER" title="Upozornění">
            <p>Dle směrnice o provozu saun <strong>není povolená společná sauna mužů, žen a dětí do pěti let.</strong></p>
            <p>Při rozdělení sauny na muže a ženy je <strong>vstup dětí opačného pohlaví zakázán</strong>.</p>
            <br>
            <p><strong>Prosíme dodržujte toto nařízení!</strong></p>
        </x-callout>
    </x-page-section>
    <x-showcase-section
        id="velka_sauna"
        heading="Velká sauna"
        description="Velká sauna nabízí prostor až pro 30 lidí, včetně ledové místnosti a ochlazovacího bazénku s padající ledovou tříští. Saunu je možné rezerovat pro skupiny. Vstup rozdělený dle rozvrhu."
        :img-url="getImage('sauna_a_para.jpg')"
        img-alt=""
    >
        <x-showcase-block highlight="30" text="Max. počet osob"/>
        <x-showcase-block highlight="100°C" text="Teplota muži"/>
        <x-showcase-block highlight="95°C" text="Teplota ženy"/>
        <x-showcase-block highlight="Skupiny" text="Možné rezervovat"/>
    
    
    
    </x-showcase-section>
    <x-showcase-section
        id="relaxacni_zona"
        heading="Relaxační zóna"
        description="V relaxační zóně najdete osm vyhřívaných lehátek s nastavitelnou teplotou a možností občerstvení z automatu."
        :img-url="getImage('wellness.jpg')"
        img-alt=""
        highlighted
        inverted
    >
        <x-showcase-block highlight="8" text="Vyhřívaných lehátek" highlighted/>
        <x-showcase-block highlight="Teplota" text="Nastavitelná" highlighted/>
    
    </x-showcase-section>
    <x-showcase-section
        id="parni_komory"
        heading="Parní komory"
        description="Dvě parní komory o teplotě 55°C s aromaterapií a tureckou parní komorou. Dostupné přímo od velkého bazénu v ceně vstupného."
        :img-url="getImage('parni_komora.jpg')"
        img-alt=""
    >
        <x-showcase-block highlight="55°C" text="Teplota"/>
        <x-showcase-block highlight="40 - 45°C" text="Při aromaterapii"/>
        <x-showcase-block highlight="Zdarma" text="V ceně vstupného"/>
    </x-showcase-section>
    <x-page-section narrower>
        <h2>Pravidla parních komor</h2>
        <p>Parní komory jsou v ceně vstupného. Kapacita je 8-10 osob na jednu komoru. Najdete zde také aromaterapii a tradiční tureckou parní komoru.</p>
        <x-callout :type="\App\Enums\CalloutEnum::INFO" title="Informace">
            <p> Parní komory jsou nově umístěné přímo od bazénu vedle hlediště. <strong> Vstup je povolen pouze v plavkách!</strong></p>
            <p><strong>Parní komory jsou již v ceně základního vstupného</strong> do bazénu.</p>
        </x-callout>
    </x-page-section>
</x-layouts.app>
