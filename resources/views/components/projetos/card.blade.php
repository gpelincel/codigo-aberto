<div class="flex justify-between items-center bg-ocean-800 rounded p-6 w-3/4">
    <div class="space-y-3 w-3/4">
        <div>
            <h1 class="uppercase text-2xl text-ocean-100 font-extrabold">Título do projeto</h1>
            <p class="text-gray-500">Nome da ONG</p>
        </div>
        <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, atque impedit!
            Veritatis assumenda odio sit velit possimus tempora eveniet dolorum tenetur animi, minus culpa, fugiat quis
            placeat, molestiae ipsam? Nihil.</p>
        <div class="w-1/2 flex flex-wrap gap-2">
            <x-projetos.category-pill :categoria="'Website'" />
            <x-projetos.category-pill :categoria="'SEO'" />
            <x-projetos.category-pill :categoria="'React'" />
        </div>
    </div>
    <div class="flex justify-center">
        <a href="#"
            class="bg-ocean-700 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg">
            Ver mais
            <i class="ml-2 fa-solid fa-arrow-right"></i>
        </a>
    </div>
</div>
