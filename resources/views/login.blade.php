<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tarefas</title>
    <meta name="author" content="Rafael Blum">
    <meta name="description" content="App todo list">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    {{-- livewire style css --}}
    <livewire:styles />

    {{-- ICON REMIXICON --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>

    {{-- VITE css app --}}
    @vite('resources/css/app.css')
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">

    {{--  --}}
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Lista de tarefas</h1>
        </a>
    </header>

    {{-- TODO_CONTENT --}}
    <main class="bg-white max-w-lg mx-auto p-8 md:p-8 my-10 rounded-lg shadow-2xl">

        {{--  --}}
        <section>
            <div class="mb-6 pt-3 rounded bg-white  ">
                <input type="text" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-2 pt-2">
            </div>

            <div class="sm:flex mt-2 mb-2 sm:items-center sm:justify-center text-sm text-stone-500 dark:text-white">
                <label for="filter_all" class="mr-3">
                    <input type="radio" id="filter_all" name="filter" wire:model="filter" value="all">
                    <span>Todas</span>
                </label>

                <label for="filter_pending" class="mr-3">
                    <input type="radio" id="filter_pending" name="filter" wire:model="filter" value="pending">
                    <span>Pendentes</span>
                </label>

                <label for="filter_done">
                    <input type="radio" id="filter_done" name="filter" wire:model="filter" value="done">
                    <span>Concluidas</span>
                </label>
            </div>
        </section>

        {{-- SECTION LIST TODO_ TASKS --}}
        <section class="mt-10" id="tasks">

            {{-- ITEM TASK --}}
            <div class="font-sans mb-1 pt-1 p-1 rounded bg-gray-200">
                {{--  --}}
                <div class="flex flex-col flex-wrap content-center">
                    <div class="flex flex-row">
                        {{-- title|edit --}}
                        <div x-data="{ open: false }" class="flex-auto flex-col text-base font-semibold text-slate-900">
                            <p @click="open = true" id="task" class="w-full text-lg text-sky-400 text-bold relative flex">
                                Titulo 1
                            </p>
                            <ul x-show="open" @click.away="open = false" class="flex flex-row flex-wrap p-1 justify-between md:justify-between content-center">
                                <li class="flex-auto">
                                    <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">Edite a descrição</span>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300"
                                           type="text" placeholder="Titulo"/>
                                    @error('title')
                                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                                            Titulo error
                                        </span>
                                    @enderror
                                </li>
                                <li class="flex flex-auto flex-wrap content-center justify-center">
                                    <button class="p-1 pt-4 rounded-md text-red-400 flex content-center" type="button" aria-label="delete" title="delete">
                                        <i class="ri-delete-bin-5-line text-2xl pt-2"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>

                        {{-- input|checked --}}
                        <div class="text-sm font-semibold text-slate-500">
                            <label>
                                <input class="w-9 h-9 flex items-center justify-center bg-gray-100 rounded-lg" type="radio" wire:model="todo.checked">
                            </label>
                        </div>
                    </div>

                    {{-- delete|details --}}
                    <div class="w-full text-sm font-medium text-slate-700">
                        <div class="space-x-2 flex text-sm">
                            <div class="flex flex-wrap">
                                User | {{date('Y')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{--  --}}
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white"> &copy; {{date('Y')}} Lista de tarefas by <a href="https://www.linkedin.com/in/rafael-blum-378656285" target="_blank" class="font-bold hover:underline">Rafael Blum</a>.</p>
    </div>

    {{--  --}}
    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog" target="_blank" class="hover:text-gray-900 dark:text-white">
                <i class="ri-youtube-fill text-3xl"></i>
            </a>
            <a href="https://www.instagram.com/universo_code" target="_blank" class="hover:text-gray-900 dark:text-white">
                <i class="ri-instagram-fill text-3xl"></i>
            </a>
            <a href="https://www.linkedin.com/in/rafael-blum-378656285" target="_blank" class="hover:text-gray-900 dark:text-white">
                <i class="ri-linkedin-box-fill text-3xl"></i>
            </a>
            <a href="https://github.com/RafaelBlum" target="_blank" class="hover:text-gray-900 dark:text-white">
                <i class="ri-github-fill text-3xl"></i>
            </a>
        </div>
    </footer>

    {{-- livewire javascript css --}}
    <livewire:scripts />

    <script rel="script" type="text/javascript" src="{{asset("src/js/alpinejs-3.min.js")}}"></script>
    <script rel="script" type="text/javascript" src="{{asset("src/js/mod-dark.js")}}"></script>
</body>
</html>