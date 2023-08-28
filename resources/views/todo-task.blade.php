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
{{-- call component livewire --}}
<main class="bg-white max-w-lg mx-auto p-2 md:p-8 my-10 rounded-lg shadow-2xl">
    <livewire:todo/>
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