<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--================== livewire style css ==================-->
    <livewire:styles />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">

            <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Lista de tarefas</h1>

                <livewire:todo/>

            <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-100 lg:my-8">


            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    &copy; 2023 Lista de tarefas
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--================== livewire javascript css ==================-->
    <livewire:scripts />
</body>
</html>