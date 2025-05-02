<x-layouts.app>
    <section class="flex flex-col items-center py-16 text-white bg-ocean-900">
        <div class="w-full max-w-4xl px-6 space-y-16">

            <!-- Cabeçalho -->
            <div class="text-center space-y-6">
                <h1 class="text-4xl font-extrabold tracking-tight">Fale com a gente</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Tem dúvidas, sugestões ou quer saber como participar? Nossa equipe está à disposição para conversar com você. Preencha o formulário abaixo ou envie uma mensagem direta.
                </p>
            </div>

            <!-- Formulário de Contato -->
            <div class="bg-ocean-800 border border-ocean-700 rounded-xl p-8 shadow-md space-y-6">
                <form action="/contato" method="POST" class="space-y-6">
                    @csrf

                    <!-- Nome -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-ocean-100 mb-1">Seu nome</label>
                        <input type="text" id="name" name="name" required
                            class="w-full bg-ocean-900 border border-ocean-600 rounded-lg px-4 py-2 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-ocean-400" placeholder="Ex: João Silva">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-ocean-100 mb-1">Seu e-mail</label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-ocean-900 border border-ocean-600 rounded-lg px-4 py-2 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-ocean-400" placeholder="Ex: joao@email.com">
                    </div>

                    <!-- Mensagem -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-ocean-100 mb-1">Mensagem</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full bg-ocean-900 border border-ocean-600 rounded-lg px-4 py-2 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-ocean-400"
                            placeholder="Como podemos te ajudar?"></textarea>
                    </div>

                    <!-- Botão -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-ocean-600 hover:bg-ocean-500 text-white font-semibold py-2 px-6 rounded-lg transition">
                            Enviar mensagem
                        </button>
                    </div>
                </form>
            </div>

            <!-- Informações adicionais -->
            <div class="text-center space-y-4">
                <p class="text-gray-400">
                    Você também pode entrar em contato direto pelo e-mail:
                    <a href="mailto:contato@codigoaberto.org" class="text-ocean-300 hover:underline">contato@codigoaberto.org</a>
                </p>
                <p class="text-sm text-gray-500">Retornamos em até 2 dias úteis.</p>
            </div>

        </div>
    </section>
</x-layouts.app>
