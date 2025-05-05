<nav class="bg-ocean-900 text-white p-4">
    <div class="flex justify-between items-center">
        <a href="/" class="logo">
            <h1>{Código_Aberto}</h1>
        </a>

        <!-- Botão hamburguer visível só no mobile -->
        <button id="menu-toggle" class="lg:hidden">
            <!-- Ícone hambúrguer -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Menu completo em telas grandes -->
        <ul class="hidden lg:flex gap-8 items-center">
            <li><a href="/sobre-nos">Sobre Nós</a></li>
            <li><a href="/projetos">Projetos</a></li>
            <li><a href="/voluntarios">Voluntários</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/fale-conosco">Fale Conosco</a></li>

            @if (!session('user_id'))
                <li>
                    <a class="bg-ocean-700 text-white py-2 px-4 rounded" href="/cadastro">Cadastre sua ONG</a>
                </li>
                <li>
                    <a href="/login">Login</a>
                </li>
            @else
                <x-navbar-dropdown />
            @endif
        </ul>
    </div>

    <!-- Menu mobile oculto por padrão -->
    <div id="mobileMenu" class="lg:hidden hidden mt-4">
        <ul class="flex flex-col gap-4">
            <li><a href="/sobre-nos">Sobre Nós</a></li>
            <li><a href="/projetos">Projetos</a></li>
            <li><a href="/voluntarios">Voluntários</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/fale-conosco">Fale Conosco</a></li>
        </ul>

        <ul class="flex flex-col gap-3 mt-4">
            @if (!session('user_id'))
                <hr>
                <li><a href="/cadastro">Cadastre sua ONG</a></li>
                <li><a href="/login">Login</a></li>
            @else
                <hr>
                <li><a href="/ong/{{ session('user_id') }}">Meu Perfil</a></li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Sair</button>
                    </form>
                </li>
            @endif
        </ul>
    </div>
</nav>
