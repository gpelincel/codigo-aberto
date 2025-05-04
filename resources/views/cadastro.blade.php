<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Código Aberto | Cadastro</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/bdcc87c8b0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <main class="grid grid-cols-2 min-h-screen">
        <img class="h-full object-cover" src="/imgs/collaboration.jpg" alt="">
        <div class="bg-ocean-900 text-white">
            <div class="flex items-center justify-center py-8 text-3xl">
                <a class="text-center" href="/">{Código_Aberto}</a>
            </div>
            <form class="grid grid-cols-2 gap-6 p-8" action="/ong" method="POST">
                @csrf
                <div>
                    <label for="nome" class="text-sm font-medium text-gray-300">Nome da ONG</label>
                    <input type="text" name="nome" id="nome" required
                        class="mt-1 w-full border-gray-500 border-b focus:outline-none">
                </div>

                <div>
                    <label for="email" class="text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full border-gray-500 border-b focus:outline-none">
                </div>

                <div>
                    <label for="senha" class="text-sm font-medium text-gray-300">Crie uma senha</label>
                    <input type="password" name="senha" id="senha" required
                        class="mt-1 w-full border-gray-500 border-b focus:outline-none">
                </div>

                <div>
                    <label for="telefone" class="text-sm font-medium text-gray-300">Telefone</label>
                    <input type="text" name="telefone" id="telefone" required
                        class="mt-1 w-full border-gray-500 border-b focus:outline-none telefone-input">
                </div>

                <div class="text-white col-span-2">
                    <label for="area_atuacao" class="text-sm text-gray-300">Área de Atuação</label>
                    <select id="area_atuacao" name="area_atuacao"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-1 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-gray-500 peer">
                        <option selected>- Selecione -</option>
                        <option value="educacao">Educação</option>
                        <option value="saude">Saúde</option>
                        <option value="meio_ambiente">Meio Ambiente</option>
                        <option value="direitos_humanos">Direitos Humanos</option>
                        <option value="animais">Proteção Animal</option>
                        <option value="outra">Outra</option>
                    </select>
                </div>

                <div class="col-span-2">
                    <label for="descricao" class="text-sm font-medium text-gray-300">Descrição da ONG</label>
                    <textarea name="descricao" id="descricao" rows="4" class="mt-1 w-full border-b border-gray-500 focus:outline-none"
                        placeholder="Fale brevemente sobre a missão e atividades da ONG..." required></textarea>
                </div>

                <div class="col-span-2">
                    <input class="mt-2" type="checkbox" name="concordo" id="concordo" required>
                    <label class="text-sm" for="">Eu li e concordo com a <a class="text-blue-500" href="/politica-privacidade">Política de Privacidade</a></label>
                </div>

                <div class="col-span-2">
                    <button type="submit"
                        class="w-1/2 inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 uppercase">
                        Inscrever-se
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
