<div class="relative inline-block text-left">
    <button id="user-menu-button" type="button" class="flex items-center gap-2 text-white hover:text-gray-200 focus:outline-none">
        <img src="{{ 'https://ui-avatars.com/api/?name=' . urlencode(session('username')) }}" alt="Avatar"
            class="w-8 h-8 rounded-full border border-gray-400">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.586l3.71-4.356a.75.75 0 111.14.976l-4.25 5a.75.75 0 01-1.14 0l-4.25-5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
    </button>

    <!-- Menu dropdown -->
    <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 text-gray-800">
        <a href="/ong/{{session('user_id')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Meu Perfil</a>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100">Sair</button>
        </form>
    </div>
</div>
