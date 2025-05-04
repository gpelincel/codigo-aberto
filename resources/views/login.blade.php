<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/bdcc87c8b0.js" crossorigin="anonymous"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <main class="grid grid-cols-[2fr_1fr] min-h-screen">
        <img class="h-full" src="/imgs/collaboration.jpg" alt="">
        <div class="bg-ocean-900 text-white">
            <div class="flex items-center justify-center py-8 text-3xl">
                <a class="text-center" href="/">{Código_Aberto}</a>
            </div>
            <form class="space-y-6 p-8" action="/login" method="POST">
                @csrf
                @if(session('status') == 'error')
                <div class="bg-gray-200 p-4 rounded text-red-800">
                    <h1><i class="fi fi-sr-circle-xmark mt-2"></i> {{session('message')}}</h1>
                </div>
                @endif
                <div>
                    <label for="email" class="text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full border-gray-500 border-b focus:outline-none">
                </div>

                <div>
                    <label for="senha" class="text-sm font-medium text-gray-300">Senha</label>
                    <input type="password" name="senha" id="senha" required
                        class="mt-1 w-full border-gray-500 border-b focus:outline-none">
                </div>

                <div>
                    <p class="text-sm" for="">Não tem uma conta? <a class="text-blue-500" href="/cadastro">Cadastre-se aqui</a></p>
                </div>

                <div>
                    <button type="submit"
                        class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 uppercase">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
