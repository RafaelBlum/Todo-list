<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--================== livewire style css ==================-->
    <livewire:styles />


    <!--========== ICON REMIXICON ==========-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--========== VITE css app ==========-->
    @vite('resources/css/app.css')
</head>
<body>


    <!--================== TODO_ TASK - LIGTH MOD body => bg-gradient-to-r from-violet-200 to-fuchsia-100 | dark mod card =>bg-black opacity-80 ==================-->
    <div class='flex items-center justify-center border-violet-500/25 min-h-screen bg-indigo-300 dark:bg-gray-700 dark:text-white'>
        <div class='w-full max-w-lg px-5 py-4 mx-auto bg-white rounded-lg shadow-xl dark:bg-gray-500'>

            {{-- DARK MOD --}}
            <div class="flex flex-row-reverse text-3xl">
                <i class="sun ri-sun-line display-none cursor-pointer"></i>
                <i class="moon ri-sun-cloudy-fill cursor-pointer"></i>
            </div>

            <div class='max-w-md mx-auto space-y-1 dark:bg-gray-500'>
                <div class="py-4 px-2 mx-auto max-w-screen-xl lg:py-8 lg:px-3">
                    <div class="mx-auto max-w-screen-sm">

                        <h1 class="text-3xl font-bold text-center text-gray-600 mt-1 mb-1 justify-center align-content-center dark:text-white">Lista de tarefas
                            <div class="sm:w-7 sm:h-10 h-10 w-5 sm:mr-5 inline-flex items-center justify-center flex-shrink-1">
                                <img src="{{asset("/images/livewire_avatar.png")}}" class="animate-bounce"/>
                            </div>

                        </h1>


                        <!--========== call component livewire ==========-->
                        <livewire:todo/>

                        <!--==========  ==========-->
                        <hr class="my-1 border-gray-200 sm:mx-auto dark:border-gray-100 lg:my-4">
                        <!--==========  ==========-->
                        <div class="sm:flex sm:items-center sm:justify-between dark:text-white">
                                <span class="text-sm text-gray-500 sm:text-center dark:text-white">
                                    &copy; 2023 Lista de tarefas
                                </span>
                            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                                <a href="https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-white">
                                    <i class="ri-youtube-fill text-3xl"></i>
                                </a>
                                <a href="https://www.instagram.com/universo_code" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-white">
                                    <i class="ri-instagram-fill text-3xl"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/rafael-blum-378656285" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-white">
                                    <i class="ri-linkedin-box-fill text-3xl"></i>
                                </a>
                                <a href="https://github.com/RafaelBlum" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-white">
                                    <i class="ri-github-fill text-3xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex items-center justify-center text-center">



                </div>
            </div>
        </div>
    </div>

    <!--================== livewire javascript css ==================-->
    <livewire:scripts />
    <script rel="script" type="text/javascript" src="{{asset("src/js/alpinejs-3.min.js")}}"></script>
    <script rel="script" type="text/javascript" src="{{asset("src/js/mod-dark.js")}}"></script>
</body>
</html>