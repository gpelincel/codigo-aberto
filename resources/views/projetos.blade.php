<x-layouts.app>
    <section class="bg-ocean-900 py-12 min-h-screen">
        <div class="flex flex-col items-center space-y-4 px-8">
            @foreach ($projetos as $projeto)
            <x-projetos.card :projeto="$projeto"></x-projetos.card>
            @endforeach
        </div>
    </section>
</x-layouts.app>