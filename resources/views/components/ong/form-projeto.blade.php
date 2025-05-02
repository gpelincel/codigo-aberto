<div id="modal-cad-projeto" class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 hidden">
    <div class="bg-gray-900 text-white rounded-lg w-full max-w-2xl p-6 relative">

        <!-- Botão fechar -->
        <button data-modal-close="modal-cad-projeto"
            class="absolute top-4 right-4 text-gray-400 hover:text-white text-4xl font-bold cursor-pointer">
            &times;
        </button>

        <form class="space-y-6 p-8" action="/projetos" method="POST">
            @csrf

            <div>
                <h2 class="uppercase text-2xl">Cadastrar novo projeto</h2>
            </div>

            <div>
                <label for="title" class="text-sm font-medium text-gray-300">Título do Projeto</label>
                <input type="text" name="title" id="title" required
                    class="mt-1 w-full border-gray-500 border rounded p-2 focus:outline-none">
            </div>

            <div>
                <label for="description" class="text-sm font-medium text-gray-300">Descrição Breve</label>
                <input type="text" name="description" id="description" required
                    class="mt-1 w-full border-gray-500 border rounded p-2 focus:outline-none">
            </div>

            <div>
                <label for="content" class="text-sm font-medium text-gray-300">Conteúdo Detalhado</label>
                <textarea name="content" id="content" rows="3" required
                    class="mt-1 w-full border rounded p-2 border-gray-500 focus:outline-none"
                    placeholder="Descreva o projeto com mais detalhes..."></textarea>
            </div>

            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 uppercase">
                    Cadastrar Projeto
                </button>
            </div>
        </form>
    </div>
</div>
