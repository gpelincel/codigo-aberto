<x-layouts.app>
    <section class="flex flex-col items-center justify-center py-10 text-white bg-ocean-900 min-h-[80vh]">
        <div class="lg:w-1/2 space-y-10">
            <div>
                <h1 class="uppercase text-3xl font-bold text-ocean-100">{{$projeto->title}}</h1>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Descrição</h1>
                <div class="mt-2 text-gray-400 text-justify text-projeto">{!! $projeto->content !!}</div>
            </div>

            <div>
                <h1 class="text-2xl font-bold">Responsável</h1>
                <div class="flex gap-2 mt-4">
                    <i class="fi fi-rr-user text-8xl"></i>
                    <div>
                        <h2 class="text-3xl font-bold">{{$projeto->ong->nome}}</h2>
                        <a href="/ong/{{$projeto->ong->id}}"
                            class="bg-ocean-700 inline-flex justify-center items-center p-3 text-base font-medium text-center text-white rounded-lg mt-3">
                            Ver mais
                            <i class="ml-2 fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
