<x-layouts.app class="Dostupnost">
    <x-hero :image="getImage('turniket.jpg')" motto="Dostupnost"/>
    <x-page-section narrower id="oteviraci_doba">
        <h2> Otevírací doba</h2>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-12 md:gap-8 grid-flow-row">
            <div>
                <h3>Vnitřní a venkovní bazén</h3>
                <div class="overflow-x-auto">
                    <table class="table-primary mt-4 max-w-full w-screen-md">
                        <tbody>
                        <tr>
                            <th>Den</th>
                            <th>Čas</th>
                        </tr>
                        <tr>
                            <td>Pondělí – pátek</td>
                            <td>6:30 – 21:00</td>
                        </tr>
                        <tr>
                            <td>Sobota – neděle, svátek</td>
                            <td>9:00 – 20:00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h3>Parní komory</h3>
                <div class="overflow-x-auto">
                    <table class="table-primary mt-4 max-w-full w-screen-md">
                        <tbody>
                        <tr>
                            <th>Den</th>
                            <th>Čas</th>
                        </tr>
                        <tr>
                            <td>Pondělí – pátek</td>
                            <td>11:00 – 20:00</td>
                        </tr>
                        <tr>
                            <td>Sobota – neděle, svátek</td>
                            <td>10:00 – 19:30</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-span-full">
                <h3 class="mb-1">Dětský bazén</h3>
                <p>Vstup povolen pouze dětem od 1 do 10 let věku v doprovodu osoby starší 18 let.</p>
                <div class="overflow-x-auto">
                    <table class="table-primary mt-4 max-w-full w-screen-md">
                        <tbody>
                        <tr>
                            <th>Den</th>
                            <th>Čas</th>
                        </tr>
                        <tr>
                            <td>Pondělí - pátek</td>
                            <td>Zavřeno</td>
                        </tr>
                        <tr>
                            <td>Sobota – neděle, svátek</td>
                            <td>9:00 – 20:00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-page-section>
    <x-page-section highlighted narrower id="kalendar_akci">
        <h2>Kalendář akcí</h2>
        <p>Dodělat</p>
    </x-page-section>
    <x-page-section narrower>
        <h2>Obsazenost drah</h2>
        <p>dodělat</p>
{{--        <iframe--}}
{{--            height="100%"--}}
{{--            src="https://www.bazenslovany.cz/obsazenost-drah/"--}}
{{--            title="Obsazenost drah"--}}
{{--            class="w-full aspect-video rounded-xl min-h-48"--}}
{{--        ></iframe>--}}
    </x-page-section>

</x-layouts.app>
