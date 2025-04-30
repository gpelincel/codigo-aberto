<x-layouts.app>
    <section class="max-w-5xl mx-auto px-4 py-10 text-white space-y-10">
        <!-- Cabeçalho -->
        <div class="flex items-center gap-4 mb-8">
            <i class="fi fi-sr-user text-8xl"></i>
            <div>
                <h1 class="text-2xl font-bold">{{ $ong->nome }}</h1>
            </div>
        </div>

        <!-- Sobre a ONG -->
        <div>
            <h2 class="text-xl font-semibold mb-2">Sobre a ONG</h2>
            <p class="text-gray-400">
                {{ $ong->descricao }}
            </p>
        </div>

        <!-- Informações de Contato -->
        <div>
            <h2 class="text-xl font-semibold mb-2">Informações de Contato</h2>
            <ul class="flex gap-4 text-gray-400">
                <li class="flex items-center gap-2"><i class="fi fi-sr-envelope text-white mt-2"></i> {{ $ong->email }}</li>
                <li class="flex items-center gap-2"><i class="fi fi-sr-phone-call text-white mt-2"></i> {{ $ong->telefone }}</li>
            </ul>
        </div>

        <!-- Redes Sociais -->
        <div>
            <h2 class="text-xl font-semibold mb-2">Redes Sociais</h2>
            <div class="flex flex-wrap gap-4 w-[60%]">
                <x-ong.badge-social-media :media="'whatsapp'" :content="'(11) 9 0000-0000'"></x-ong.badge-social-media>
                <x-ong.badge-social-media :media="'instagram'" :content="'@ongmaneira'"></x-ong.badge-social-media>
                <x-ong.badge-social-media :media="'tik tok'" :content="'ongmaneira'"></x-ong.badge-social-media>
                <x-ong.badge-social-media :media="'linkedin'" :content="'Ong Maneira'"></x-ong.badge-social-media>
                <x-ong.badge-social-media :media="'youtube'"  :content="'Canal da ongmaneira'"></x-ong.badge-social-media>
            </div>
        </div>
        <!-- Projetos Ativos -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Projetos Ativos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 border rounded-xl shadow-sm">
                    <h3 class="font-semibold text-lg">Plataforma de Doações</h3>
                    <p class="text-sm text-gray-600 mb-2">Criação de sistema web para doações mensais recorrentes.</p>
                    <p class="text-sm text-gray-500"><strong>Tecnologias:</strong> Laravel, Stripe API</p>
                </div>
                <div class="p-4 border rounded-xl shadow-sm">
                    <h3 class="font-semibold text-lg">Mapa da Comunidade</h3>
                    <p class="text-sm text-gray-600 mb-2">Sistema de geolocalização de voluntários e famílias atendidas.
                    </p>
                    <p class="text-sm text-gray-500"><strong>Tecnologias:</strong> LeafletJS, Firebase</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
