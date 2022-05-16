<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MY BLOG</title>
    <meta name="title" content="Airon - RSS READER">
    <meta name="description" content="Simple and elegant RSS reader">
    <meta name="keywords" content="rss, reader, blog, read, news, latest">
    <meta name="author" content="Airon Dev">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://myrssblog.herokuapp.com/">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png') }}">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex flex-col h-screen bg-white text-gray-800 break-words">
    <header id="header" class="header-shadow bg-white px-6 py-5 z-50 fixed w-full top-0 transition-all transform ease-in-out duration-500">
        <div class="max-w-5xl mx-auto flex items-center flex-wrap justify-between">
            <div class="sm:mr-8"><a class="flex items-center" href="{{ route('page.index') }}"><span class="text-xl text-teal-700 font-semibold self-center">Home</span></a></div>
            <nav id="menu" class="order-last md:order-none items-center flex-grow w-full md:w-auto md:flex hidden mt-2 md:mt-0">
               
                <a href="{{ route('page.manage') }}" class="block mt-4 md:inline-block md:mt-0 font-medium text-gray-700 hover:text-teal-600 text-base mr-4">Manage</a>

                <a href="{{ route('page.about') }}" class="block mt-4 md:inline-block md:mt-0 font-medium text-gray-700 hover:text-teal-600 text-base mr-4">About</a>
            </nav>
            <form id="search" action="/search" class="order-last sm:order-none flex-grow items-center justify-end hidden sm:block mt-6 sm:mt-0"><label class="visually-hidden" for="header-searchbox">Search here ...</label> <input type="text" id="header-searchbox" name="q" placeholder="Search here ..." class="w-full sm:max-w-xs bg-gray-200 border border-transparent float-right focus:bg-white focus:border-gray-300 focus:outline-none h-8 p-4 placeholder-gray-500 rounded text-gray-700 text-sm"></form>
            <div id="menu-toggle" class="flex items-center md:hidden text-gray-700 hover:text-teal-600 cursor-pointer sm:ml-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></div>
        </div>
    </header>

    <main class="mx-7 lg:mx-6 mt-32 flex-grow">
        @yield('content')
    </main>

    <footer class="mt-20 px-10 py-8 bg-gray-200">
        <div class="max-w-5xl mx-auto text-gray-700 text-center">© 2022 <a href="/" class="font-medium" target="_blank" rel="noopener">RSS READER</a>. Made by <a href="https://github.com/airondev" target="_blank" rel="noopener">Airon Dev</a> using <a href="https://tailwindcss.com" target="_blank" rel="noopener">Tailwind CSS</a>.</div>
    </footer>
    <script src="{{asset('assets/js/bundle.js') }}"></script>
</body>

</html>
