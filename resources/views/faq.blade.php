<x-layouts.app>
    <section class="flex flex-col items-center py-16 text-white bg-ocean-900">
        <div class="w-full max-w-6xl px-6 space-y-20">

            <!-- Título -->
            <div class="text-center space-y-6">
                <h1 class="text-4xl font-extrabold tracking-tight">Perguntas Frequentes</h1>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    Reunimos aqui as dúvidas mais comuns sobre o Código Aberto, desde como participar até detalhes sobre os projetos. Se ainda restar alguma pergunta, entre em contato!
                </p>
            </div>

            <!-- FAQ (Accordion Style) -->
            <div class="space-y-6">
                <div class="space-y-4">
                    @foreach ([
                        ['title' => 'O que é o Código Aberto?', 'content' => 'É uma comunidade de tecnologia voltada para impacto social. Criamos soluções digitais para ONGs e projetos sociais por meio do trabalho voluntário de desenvolvedores, designers, gerentes de projeto e outros profissionais.'],
                        ['title' => 'Preciso ter experiência profissional para participar?', 'content' => 'Não. Nosso foco está em pessoas dispostas a aprender e colaborar. Ter curiosidade, comprometimento e vontade de contribuir já é o suficiente.'],
                        ['title' => 'Quais habilidades são bem-vindas?', 'content' => 'Buscamos pessoas de diferentes áreas: desenvolvimento, UX/UI, gestão de produto, marketing, QA, infraestrutura e muito mais. Sempre há uma forma de contribuir.'],
                        ['title' => 'Como funciona a organização dos projetos?', 'content' => 'Utilizamos metodologias ágeis (como Scrum e Kanban), reuniões periódicas e plataformas colaborativas para garantir que todos estejam alinhados e os projetos avancem.'],
                        ['title' => 'Quanto tempo preciso me dedicar?', 'content' => 'O tempo é flexível e depende da sua disponibilidade. Recomendamos pelo menos 3 a 5 horas semanais para um bom envolvimento nos projetos.'],
                        ['title' => 'Vou receber certificado ou algum reconhecimento?', 'content' => 'Sim! Emitimos certificados para quem colabora com frequência e destaque. Além disso, você pode adicionar sua participação no LinkedIn e usar os projetos no portfólio.'],
                        ['title' => 'Como faço para entrar?', 'content' => 'Basta preencher nosso formulário de interesse na página de inscrição. Depois disso, entraremos em contato com os próximos passos.']
                    ] as $faq)
                        <details class="bg-ocean-800 border border-ocean-700 rounded-xl p-5">
                            <summary class="font-semibold cursor-pointer text-white hover:text-ocean-200 transition">
                                {{ $faq['title'] }}
                            </summary>
                            <p class="mt-2 text-gray-400 text-sm leading-relaxed">
                                {{ $faq['content'] }}
                            </p>
                        </details>
                    @endforeach
                </div>
            </div>

            <!-- Chamada final -->
            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold">Ainda com dúvidas?</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Fale com a gente! Estamos aqui para ajudar você a começar sua jornada no Código Aberto.
                </p>
                <a href="/contato"
                   class="inline-block mt-2 px-6 py-3 bg-ocean-700 hover:bg-ocean-600 transition rounded-xl text-sm font-medium text-white shadow">
                    Entrar em contato
                </a>
            </div>

        </div>
    </section>
</x-layouts.app>
