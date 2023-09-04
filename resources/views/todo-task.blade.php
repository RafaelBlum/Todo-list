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
    {{-- VITE css app --}}
    @vite('resources/css/app.css')
</head>
<body>
    {{-- BODY --}}
    <div class="min-h-screen bg-purple-400 dark:bg-gray-600 flex flex-col justify-center items-center" x-data="{ open: false }">

        {{-- BG_IMG --}}
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 dark:bg-gray-400 -top-5 -left-16 z-0 transform rotate-45 hidden md:block"></div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 dark:bg-gray-400 -bottom-6 -right-10 transform rotate-12 hidden md:block"></div>

        {{-- APP BODY --}}
        <div class="bg-white rounded-lg shadow-xl z-20 dark:bg-gray-400 dark:text-white">
            {{-- LOG --}}
            @if (Route::has('login'))
                <div class="sm:relative sm:top-0 sm:right-0 p-1 text-right z-10">
                    @auth
                        {{-- LOG USER - DETAILS --}}
                        <div class="dark:text-white flex ml-5 float-left justify-center font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <i class="ri-menu-add-fill mr-2" @click="open = true"></i> <p>{{auth()->user()->name}}</p>
                            {{--TODO_ AUTH MODAL --}}
                            <div x-show="open" class="absolute w-30 ml-2 mt-6" @click.away="open = false"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90">

                                <div class="w-full">
                                    <div class="bg-indigo-300 dark:bg-white opacity-80 text-dark rounded-lg shadow-lg overflow-hidden">
                                        <div class="text-center text-sm sm:text-md max-w-sm mx-auto dark:text-black">
                                            <a href="{{ url('/dashboard') }}" class="mx-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                Dashboard <livewire:auth.logout />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @else
                        {{-- LOGIN UNICO ID 1 --}}
                        @if(!auth()->user())
                            <livewire:auth.login with="1"/>
                        @endif
                    @endauth

                    {{-- DARK MOD --}}
                    <div class="flex flex-row-reverse text-2xl float-right mr-5">
                        <i class="sun ri-sun-line display-none cursor-pointer"></i>
                        <i class="moon ri-sun-cloudy-fill cursor-pointer"></i>
                    </div>
                </div>
            @endif

            <div class="p-8">
                {{-- TITLE | NOTIFICATIONS --}}
                <div>
                    <h1 class="text-3xl font-bold text-center mb-2 cursor-pointer">Lista de tarefas</h1>
                    <p class="w-80 text-center text-sm mb-2 font-semibold text-gray-700 tracking-wide cursor-pointer">
                        Create your activities in the app now
                    </p>
                    <livewire:notifications/>
                </div>

                {{--  --}}
                <livewire:todo/>
            </div>

        </div>

        {{-- BG_IMG --}}
        <div class="w-40 h-40 absolute bg-purple-300 rounded-full dark:bg-gray-400 top-0 right-12 hidden md:block"></div>
        <div class="w-20 h-40 absolute bg-purple-300 rounded-full dark:bg-gray-400 bottom-20 left-10 transform rotate-45 hidden md:block"></div>

        {{-- FOOTER --}}
        <div class="mt-3">
            <div class="max-w-lg mx-auto text-center mb-2">
                <p class="text-white"> &copy; {{date('Y')}} Lista de tarefas by <a href="https://www.linkedin.com/in/rafael-blum-378656285" target="_blank" class="font-bold hover:underline">Rafael Blum</a>.</p>
            </div>

            <footer class="max-w-lg mx-auto flex justify-center text-white">
                <div class="flex mt-1 space-x-6 sm:justify-center sm:mt-0">
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
        </div>
    </div>

    {{-- livewire javascript css --}}
    <livewire:scripts />

    <script rel="script" type="text/javascript" src="{{asset("src/js/alpinejs-3.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script rel="script" type="text/javascript" src="{{asset("src/js/mod-dark.js")}}"></script>
</body>
</html>