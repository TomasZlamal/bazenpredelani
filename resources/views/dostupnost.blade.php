<x-layouts.app class="Dostupnost">
    <x-hero :image="getImage('turniket.jpg')" motto="Dostupnost"/>
    <x-page-section>
        <h2> Otevírací doby...</h2>
        <div class="flex flex-row gap-10 flex-wrap justify-center">
            <div class="flex flex-col justify-center">
                <h3 class="text-center">Bazénu</h3>
                <table class="table-primary">
                    <tbody>
                        <tr>
                            <th>Den</th>
                            <th>Čas</th>
                        </tr>
                        <tr>
                            <td>Pondělí - pátek</td>
                            <td>6:30 - 21:00</td>
                        </tr>
                        <tr>
                            <td>Sobota - neděle, svátek</td>
                            <td>9:00 - 20:00</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="flex flex-col justify-center">
                <h3 class="text-center">Parních komor</h3>
                <table class="table-primary">
                    <tbody>
                        <tr>
                            <th>Den</th>
                            <th>Čas</th>
                        </tr>
                        <tr>
                            <td>Pondělí - pátek</td>
                            <td>6:30 - 21:00</td>
                        </tr>
                        <tr>
                            <td>Sobota - neděle, svátek</td>
                            <td>9:00 - 20:00</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="flex flex-col justify-center">
                <h3 class="text-center">Dětského bazénu</h3>
                <p>(povolen vstup jen dětem od 1 roku do 10ti let v doprovodu osoby starší 18ti let)</p>
                <table class="table-primary">
                    <tbody>
                        <tr>
                            <th>Den</th>
                            <th>Čas</th>
                        </tr>
                        <tr>
                            <td>Pondělí - pátek</td>
                            <td>6:30 - 21:00</td>
                        </tr>
                        <tr>
                            <td>Sobota - neděle, svátek</td>
                            <td>9:00 - 20:00</td>
                        </tr>
                    </tbody>
                </table>

            </div>


        </div>

    </x-page-section>
    <section>
        <iframe
            height="100%"
            src="https://www.bazenslovany.cz/obsazenost-drah/"
            title="Obsazenost drah"
            class="w-full aspect-video rounded-xl min-h-48"
        ></iframe>
    </section>

</x-layouts.app>
