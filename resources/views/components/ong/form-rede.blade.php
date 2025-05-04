<div id="modal-cad-rede"
    class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 hidden">
    <div class="text-white rounded-lg w-full max-w-2xl p-6 relative bg-ocean-900">

        <!-- Botão fechar -->
        <button data-modal-close="modal-cad-rede"
            class="absolute top-4 right-4 text-gray-400 hover:text-white text-4xl font-bold cursor-pointer">
            &times;
        </button>

        <form class="space-y-6" action="/redes-sociais" method="POST">
            @csrf
        
            <!-- Campo: Nome de exibição -->
            <div>
                <label for="nome" class="text-sm font-medium text-gray-300">Nome de Exibição</label>
                <input type="text" name="nome" id="nome" required
                    class="mt-1 w-full border border-gray-500 rounded p-2 focus:outline-none bg-gray-700 text-white"
                    placeholder="Ex: @minhaongoficial">
            </div>
        
            <!-- Campo: Rede social (select) -->
            <div>
                <label for="rede" class="text-sm font-medium text-gray-300">Rede Social</label>
                <select name="rede" id="rede" required
                    class="mt-1 w-full border border-gray-500 rounded p-2 bg-gray-700 text-white focus:outline-none">
                    <option value="">Selecione uma rede</option>
                    <option value="whatsapp">WhatsApp</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="instagram">Instagram</option>
                    <option value="tiktok">TikTok</option>
                    <option value="youtube">YouTube</option>
                </select>
            </div>
        
            <!-- Campo: Link da rede -->
            <div>
                <label for="link" class="text-sm font-medium text-gray-300">Link</label>
                <input type="url" name="link" id="link" required
                    class="mt-1 w-full border border-gray-500 rounded p-2 focus:outline-none bg-gray-700 text-white"
                    placeholder="https://...">
            </div>
        
            <!-- ID da ONG -->
            <input type="hidden" name="id_ong" id="id_ong" value="{{ session('user_id') }}">
        
            <!-- Botão de envio -->
            <div>
                <button type="submit"
                    class="w-full py-3 px-6 rounded-md text-white bg-indigo-600 hover:bg-indigo-700 uppercase">
                    Cadastrar Rede Social
                </button>
            </div>
        </form>
        
    </div>
</div>
