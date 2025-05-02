<x-layouts.app>

    @push('styles')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    @endpush

    @push('scripts')
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    @endpush

    <div class="min-h-screen bg-gray-900 text-white flex justify-center items-center p-8">
        <div class="bg-gray-800 rounded-lg w-full max-w-3xl p-8 shadow-lg">

            <h2 class="text-3xl font-bold mb-6 uppercase">Cadastrar novo projeto</h2>

            <form class="space-y-6" action="/projetos" method="POST">
                @csrf

                <div>
                    <label for="title" class="text-sm font-medium text-gray-300">Título do Projeto</label>
                    <input type="text" name="title" id="title" required
                        class="mt-1 w-full border border-gray-500 rounded p-2 focus:outline-none bg-gray-700 text-white">
                </div>

                <div>
                    <label for="description" class="text-sm font-medium text-gray-300">Descrição Breve</label>
                    <input type="text" name="description" id="description" required
                        class="mt-1 w-full border border-gray-500 rounded p-2 focus:outline-none bg-gray-700 text-white">
                </div>

                <div>
                    <label for="content" class="text-sm font-medium text-gray-300">Conteúdo Detalhado</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                    <trix-editor input="content" class="bg-white text-black rounded" placeholder="Insira todas as informações possíveis sobre o seu projeto..."></trix-editor>
                </div>

                <input type="text" id="id_ong" name="id_ong" value="1">

                <div>
                    <button type="submit"
                        class="w-full py-3 px-6 rounded-md text-white bg-indigo-600 hover:bg-indigo-700 uppercase">
                        Cadastrar Projeto
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
