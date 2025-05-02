<div class="flex justify-between items-center bg-ocean-800 rounded-lg p-6 w-full">
    <div class="space-y-3 w-3/4">
        <div>
            <h1 class="uppercase text-2xl text-ocean-100 font-extrabold">{{$projeto->title}}</h1>
            <a href="/ong/{{$projeto->ong->id}}" class="text-gray-500">{{$projeto->ong?->nome}}</a>
        </div>
        <p class="text-gray-400">{{$projeto->description}}</p>
        {{-- <div class="w-1/2 flex flex-wrap gap-2">
            <x-projetos.category-pill :categoria="'Website'" />
            <x-projetos.category-pill :categoria="'SEO'" />
            <x-projetos.category-pill :categoria="'React'" />
        </div> --}}
    </div>
    <div class="flex justify-center">
        <a href="/projetos/{{$projeto->id}}"
            class="bg-ocean-700 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg">
            Ver mais
            <i class="ml-2 fa-solid fa-arrow-right"></i>
        </a>
    </div>
</div>
