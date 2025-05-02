<x-layouts.app>
    <section class="flex flex-col items-center py-16 text-white bg-ocean-900">
        <div class="w-full max-w-6xl space-y-20">

            <!-- Cabeçalho -->
            <div class="text-center space-y-6">
                <h1 class="text-4xl font-extrabold tracking-tight">Sobre Nós</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                    Somos uma iniciativa educacional e colaborativa que conecta desenvolvedores em início de carreira a
                    projetos sociais que precisam de apoio técnico. Aprendizado com propósito.
                </p>
            </div>

            <!-- Missão e Valores com imagem lateral -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Imagem decorativa ou informativa -->
                <img src="/imgs/tem-work-illustration.png" alt="Ilustração de missão"
                    class="w-full opacity-90">

                <div class="space-y-10">
                    <!-- Missão -->
                    <div class="space-y-4">
                        <h2 class="text-2xl font-semibold text-ocean-100">Nossa Missão</h2>
                        <p class="text-gray-400 leading-relaxed">
                            Conectar tecnologia e impacto social, promovendo o crescimento de novos talentos e apoiando
                            organizações através de soluções digitais acessíveis.
                        </p>
                    </div>
                    <!-- Valores -->
                    <div class="space-y-4">
                        <h2 class="text-2xl font-semibold text-ocean-100">Nossos Valores</h2>
                        <ul class="text-gray-400 space-y-1 list-disc list-inside">
                            <li>Colaboração com propósito</li>
                            <li>Inclusão e aprendizado contínuo</li>
                            <li>Transparência e ética</li>
                            <li>Compromisso com impacto real</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Equipe -->
            <div class="rounded-xl border border-ocean-700 bg-ocean-800 p-10 shadow-md space-y-8">
                <div class="text-center space-y-2">
                    <h2 class="text-2xl font-semibold">Nossa Equipe</h2>
                    <p class="text-gray-300 max-w-2xl mx-auto">
                        O projeto foi idealizado e desenvolvido por alunos de Engenharia de Computação da Facens, com
                        foco em inovação, responsabilidade social e desenvolvimento profissional.
                    </p>
                </div>

                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 text-center text-gray-400 text-lg">
                    <li>Felipe Matias de Jesus</li>
                    <li>Gabriel Pelincel Ramalho</li>
                    <li>Jorge Henrique Gobbo Berenschot</li>
                    <li>Pedro Henrique Santana de Oliveira</li>
                    <li class="col-span-full">Yan Pansanato de Campos</li>
                </ul>

                <p class="mt-4 text-sm text-center text-gray-500">Orientação: Prof. Deivison Takatu</p>
            </div>

        </div>
    </section>


</x-layouts.app>
