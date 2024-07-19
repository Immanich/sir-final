<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Htmx</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script src="https://kit.fontawesome.com/74f7d44090.js" crossorigin="anonymous"></script>
    <style>
        .fade-me-out.htmx-swapping {
            opacity: 0;
            transition: opacity 1s ease-out;
        }
    </style>
</head>
<body class="flex">
    <!-- Sidebar -->
    <div class="navbar flex flex-col bg-gray-300 min-h-screen w-2/12">
        <div id="brand" class="logo text-center font-bold py-10 hover:bg-gray-500 hover:text-zinc-200 duration-500 hover:cursor-pointer" style="font-size: 2.5rem;">
            <h1>Immanich</h1>
        </div>
        <nav id="main-nav" class="text-center mt-3">
            <ul class="text-2xl">
                <li class="p-4 hover:bg-gray-500 hover:text-zinc-200 duration-500">
                    <a href="/" class="flex items-center justify-center">
                        Home
                    </a>
                </li>
                <li class="p-4 hover:bg-gray-500 hover:text-zinc-200 duration-500">
                    <a href="#" class="flex items-center justify-center">
                        About
                    </a>
                </li>
                <li class="p-4 hover:bg-gray-500 hover:text-zinc-200 duration-500">
                    <a href="/students" class="flex items-center justify-center">
                        Students
                    </a>
                </li>
                <li class="p-4 hover:bg-gray-500 hover:text-zinc-200 duration-500">
                    <a href="/accounts" class="flex items-center justify-center">
                        Accounts
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content Area -->
    <div class="content w-10/12 flex-1 flex flex-col bg-gray-100">
        {{-- <button 
            class="fade-me-out m-4 p-2 bg-blue-500 text-white rounded"
            hx-delete="/fade_out_demo"
            hx-swap="outerHTML swap:1s">
            Fade Me Out
        </button> --}}
        <section class="flex-1 overflow-y-auto">
            <article id="content" class="bg-white rounded-lg shadow-lg p-6">
                @yield('content')
            </article>
        </section>
    </div>
</body>
</html>
