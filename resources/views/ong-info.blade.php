<x-layouts.app>
    <section class="flex flex-col items-center py-10 text-white bg-ocean-900">
        <div class="w-1/2 space-y-10">
            <!-- Cabeçalho -->
            <div class="flex flex-col items-center gap-4 mb-8">
                <i class="fi fi-rr-user text-8xl"></i>
                <div>
                    <h1 class="text-2xl font-bold">{{ $ong->nome }}</h1>
                </div>
            </div>

            <!-- Informações de Contato -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Informações de Contato</h2>
                <ul class="flex flex-col text-lg">
                    <li class="flex items-center gap-5"><i class="fi fi-rr-envelope text-white mt-2"></i>
                        {{ $ong->email }}
                    </li>
                    <li class="flex items-center gap-5"><i class="fi fi-rr-phone-call text-white mt-2"></i>
                        {{ $ong->telefone }}</li>
                </ul>
            </div>

            <!-- Sobre a ONG -->
            <div>
                <h2 class="text-xl font-semibold mb-2">Sobre a ONG</h2>
                <p class="text-gray-400">
                    {{ $ong->descricao }}
                </p>
            </div>

            <!-- Redes Sociais -->
            <div>
                <div class="flex items-center gap-6 mb-4">
                    <h2 class="text-xl font-semibold">Redes Sociais</h2>
                    <button data-modal-target="modal-cad-rede"
                        class="flex bg-ocean-700 border-ocean-700 hover:bg-ocean-800 transition-colors rounded-lg py-2 px-4 cursor-pointer w-fit"><i class="fi fi-rs-plus-small mr-1 text-lg"></i> <span>Adicionar rede social</span></button>
                </div>
                <div class="flex flex-wrap gap-4">
                    @foreach ($ong->social_medias as $rede_social)
                        <x-ong.badge-social-media :rede_social="$rede_social"></x-ong.badge-social-media>
                    @endforeach
                </div>
            </div>
            <!-- Projetos Ativos -->
            <div>
                <div class="flex flex-col gap-2 mb-4">
                    <h2 class="text-xl font-semibold">Projetos Ativos</h2>
                    <button data-modal-target="modal-cad-projeto"
                        class="flex bg-ocean-700 border-ocean-700 hover:bg-ocean-800 transition-colors rounded-lg py-2 px-4 cursor-pointer w-fit"><i class="fi fi-rs-plus-small mr-1 text-lg"></i> <span>Adicionar projeto</span></button>
                </div>
                <div class="flex flex-col items-center space-y-4">
                    @foreach ($ong->projetos as $projeto)
                        <x-projetos.card :projeto="$projeto"></x-projetos.card>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <x-ong.form-projeto></x-ong.form-projeto>
</x-layouts.app>
