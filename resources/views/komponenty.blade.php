<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Test komponent</title>

        @vite('resources/css/app.css')
        @vite('resources/css/styles.css')
        @vite('resources/js/app.js')

    </head>
    <body>
        <section class="max-w-[45rem] mx-20 flex flex-col">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <p>Paragraph</p>
            <p>
                Platnost permanentky je 1 rok od data
                <strong>vystavení</strong> či jejího znovunabití.
            </p>
            <small>Small</small>
            <x-callout :type="\App\Enums\CalloutEnum::BLUE">
                <p>Gleb</p>
            </x-callout>
            <x-callout :type="\App\Enums\CalloutEnum::RED">
                <p>Vnitřní bazén, <b>včetně atrakcí</b>, je z důvodu rekonstrukce uzavřen.</p>
            </x-callout>

            <x-callout :type="\App\Enums\CalloutEnum::YELLOW">
                <p>Za každou překročenou minutu je účtován doplatek 2,- Kč / minuta (při pobytu v bazénu) nebo 4,- Kč / minuta (při pobytu v sauně), a to bez ohledu na to, zda se jedná o zakoupené plné či slevové vstupné.</p>
                <p>Za ztrátu jakéhokoliv čipového náramku či karty je účtován poplatek 200,- Kč. Za nalezení a vrácení čipu po době pobytu v areálu se uhrazená částka nevrací.</p>
                <p>V případě opětovného nálezu čipového náramku či karty v době pobytu nebo nouzového otevření skříňky je účtován pouze manipulační poplatek 100,- Kč.</pv>
            </x-callout>
                        <p><strong>Bold Text Example</strong></p>
                        <p><em>Italic Text Example</em></p>
                        <p>
                            <strong><em>Bold and Italic Text Example</em></strong>
                        </p>

                        <hr>

                        <ul>
                            <li>Unordered List Item 1</li>
                            <li>
                                Unordered List Item 2
                                <ul>
                                    <li>Nested Unordered Item 1</li>
                                    <li>Nested Unordered Item 2</li>
                                </ul>
                            </li>
                        </ul>

                        <ol>
                            <li>Ordered List Item 1</li>
                            <li>
                                Ordered List Item 2
                                <ol>
                                    <li>Nested Ordered Item 1</li>
                                    <li>Nested Ordered Item 2</li>
                                </ol>
                            </li>
                        </ol>
                        <div class="overflow-x-auto">
                            <!-- ten overflow-x musí být na parent divu, jinak to nefunguje-->
                            <table>
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>do 1,5 hodiny</th>
                                        <th>do 3 hodin</th>
                                        <th>celodenní</th>
                                    </tr>
                                    <tr>
                                        <th>plné</th>
                                        <td>135 Kč</td>
                                        <td>250 Kč</td>
                                        <td>300 Kč</td>
                                    </tr>
                                    <tr>
                                        <th>slevové</th>
                                        <td>105 Kč</td>
                                        <td>200 Kč</td>
                                        <td>250 Kč</td>
                                    </tr>
                                    <tr>
                                        <th>rodinné</th>
                                        <td>375 Kč</td>
                                        <td>700 Kč</td>
                                        <td>850 Kč</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            <x-href-button href="#">Test</x-href-button>
        </section>
        <x-blue-section>
            <div class="max-width-blog-container">
                    <h3>Slevové vstupné platí pro</h3>
                    <ul>
                        <li>děti od 122 cm do 15 let věku</li>
                        <li>studující řádného studia od 15 do 26 let věku - nutno prokázat žákovským nebo studentským průkazem současně s obč. průkazem (JIS karta, ISIC).</li>
                        <li>důchodce – nutno se prokázat potvrzením o pobírání starobního důchodu</li>
                        <li>senioři od 60 let věku – nutno věk prokázat občanským průkazem</li>
                        <li>držitele průkazu ZTP - nutno předložit platný průkaz ZTP</li>
                        <li>držitele zlaté Jánského plakety - nutno předložit průkaz držitele</li>
                    </ul>
                    <br>
                <x-phone-contact phone="+420 111 222 333"></x-phone-contact>
                <x-email-contact email="example@mail.cz"></x-email-contact>
            </div>
        </x-blue-section>
        <section>
            <div class="max-width-blog-container">
                <p><strong>Link Example:</strong> Visit <a href="https://www.openai.com">OpenAI</a> for more information.</p>

                <p><strong>Anchor Example:</strong></p>
                <p>Jump to <a href="#main-heading">Main Heading</a>.</p>

                <hr>

                <p><strong>Image Example:</strong></p>
                <img src="https://via.placeholder.com/150" alt="Dummy Image">
            </div>
        </section>
    </body>
</html>

