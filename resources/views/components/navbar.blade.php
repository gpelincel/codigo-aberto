<nav class="flex justify-between items-center bg-ocean-900 p-4 text-white">
    <a href="/" class="logo">
        <h1>{Código_Aberto}</h1>
    </a>
    <ul class="flex gap-8">
        <li>Sobre Nós</li>
        <li><a href="/projetos">Projetos</a></li>
        <li>Voluntários</li>
        <li>FAQ</li>
        <li>Fale Conosco</li>
        <li>Doar</li>
    </ul>
    @if (!session('user_id'))
        <ul class="flex gap-3">
            <li>
                <a class="bg-ocean-700 text-white py-2 px-4 rounded" href="/cadastro">Cadastre sua ONG</a>
            </li>
            <li>
                <a class="py-2 px-4" href="/login">Login</a>
            </li>
        </ul>
    @else
        <x-navbar-dropdown></x-navbar-dropdown>
    @endif
</nav>
