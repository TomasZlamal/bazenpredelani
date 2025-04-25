<x-layouts.app title="404">
    <x-hero motto="Nastala chyba" :image="getImage('venkovni_bazen.jpg')"></x-hero>
    <section>
        <div class="text-center">
            
            <p class="mb-8">Jejda! Tento odkaz se nám nepodařilo najít. Zkuste to prosím později.</p>
            <x-href-button :href="route('index')">Zpátky na hlavní stránku</x-href-button>
            
        
        </div>
    </section>
</x-layouts.app>