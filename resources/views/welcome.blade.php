<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div
            class="relative flex flex-col min-h-screen overflow-hidden font-semibold text-gray-600 bg-gray-100 dark:bg-gray-900 dark:text-gray-400"
        >
            <header class="top-nav bg-sky-950">
                <div
                    class="container flex items-center justify-between py-6 mx-auto"
                >
                    <div class="flex gap-4">
                        <a href="/" wire:navigate> Home </a>
                        <a href="/search-ticket" wire:navigate>
                            Search Ticket
                        </a>
                    </div>
                    <div class="right-nav">
                        @if (Route::has('login'))
                        <livewire:welcome.navigation />
                        @endif
                    </div>
                </div>
            </header>
            <section class="flex justify-between">
                <div class="container mx-auto">Workspaces</div>
            </section>
            <footer class="mt-auto bg-sky-950">
                <div class="flex items-center justify-center py-4">
                    <div class="">Footer</div>
                </div>
            </footer>
            <div
                class="fixed flex flex-col items-center justify-center w-12 h-12 transition-all duration-300 rounded-full shadow-md right-10 bottom-5 bg-primary hover:cursor-pointer dark:bg-slate-800"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-8 text-sky-700"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                </svg>
            </div>
            <div
                class="fixed flex flex-col items-center justify-center h-12 transition-all duration-300 bg-white rounded-l-full shadow-md dark:bg-slate-800 bottom-60 -right-44 hover:right-0 hover:scale-110 hover:cursor-pointer hover:shadow-lg"
            >
                <button
                    class="flex items-center justify-center gap-3 pl-4 pr-5"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 text-sky-700"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"
                        />
                    </svg>

                    <div class="text-primary">Chat with Messenger</div>
                </button>
            </div>
        </div>
    </body>
</html>
