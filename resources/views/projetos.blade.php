<x-layouts.app>
    <section class="bg-ocean-900 py-12 min-h-screen">
        <div class="flex flex-col items-center px-8">
            <div class="w-3/4 space-y-4">
                @foreach ($projetos as $projeto)
                <x-projetos.card :projeto="$projeto"></x-projetos.card>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>