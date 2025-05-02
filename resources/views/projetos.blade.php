<x-layouts.app>
    <section class="bg-ocean-900 py-12">
        <div class="flex flex-col items-center justify-center px-8 min-h-[70vh]">
            @if (count($projetos) > 0)
                <div class="w-3/4 space-y-4">
                    @foreach ($projetos as $projeto)
                        <x-projetos.card :projeto="$projeto"></x-projetos.card>
                    @endforeach
                </div>
            @else
                <div class="flex flex-col items-center text-center space-y-4">
                    <img class="invert mb-6" src="/imgs/empty-box.png" alt="">
                    <h1 class="uppercase text-4xl text-ocean-100 font-bold">Projetos não encontrados</h1>
                    <p class="text-gray-400">Infelizmente (ou não) não temos projetos ativos no momento</p>
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
