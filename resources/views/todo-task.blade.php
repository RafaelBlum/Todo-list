<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--================== livewire style css ==================-->
    <livewire:styles />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!--========== ICON REMIXICON ==========-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


    <!--========== VITE css app ==========-->
    @vite('resources/css/app.css')
</head>
<body class="h-14 bg-gradient-to-r from-violet-200 to-fuchsia-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-5 bg-white rounded-lg shadow-lg">

            <!--========== title ==========-->
            <h1 class="text-3xl font-bold text-center text-gray-600 mt-1 mb-1">Lista de tarefas ❤</h1>

            <!--========== call component livewire ==========-->
            <livewire:todo/>

            <!--==========  ==========-->
            <hr class="my-1 border-gray-200 sm:mx-auto dark:border-gray-100 lg:my-4">

            <!--==========  ==========-->
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    &copy; 2023 Lista de tarefas
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill text-3xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill text-3xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill text-3xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-gray-600">
                        <i class="ri-github-fill text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--================== livewire javascript css ==================-->
    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript" rel="script">
        $('body').on('click', '[data-editable]', function () {
           var $el = $(this);

           var $input = $('<input class="text-left w-full rounded-lg border border-gray-400 p-2"/>').val($el.text());
           $el.replaceWith($input);

           var save = function(){
               var $p = $('<p data-editable class="w-full text-sm text-grey-darkest" />').text($input.val());
               $input.replaceWith($p);
           }

           $input.one('blur', save).focus();
        });

    </script>
</body>
</html>