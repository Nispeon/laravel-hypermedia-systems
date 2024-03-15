<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
<section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
    <div class="flex h-screen flex-col justify-between font-sans">
        <header class="flex items-center justify-between py-10">
            <div><a aria-label="TailwindBlog" href="/">
                    <div class="flex items-center justify-between">
                        <div class="mr-3">
                        </div>
                        <div class="h-6 text-2xl font-semibold sm:block">Hypermedia</div>
                    </div>
                </a></div>
            <nav class="flex items-center space-x-4 leading-5 sm:space-x-6">
                <a class=" font-medium text-gray-900 sm:block" href="{{ route('contacts.index') }}">Contacts</a>
                <a class=" font-medium text-gray-900 sm:block" href="/tags">Tags</a>
                <a class=" font-medium text-gray-900 sm:block" href="/projects">Projects</a>
                <a class=" font-medium text-gray-900 sm:block" href="/about">About</a>
            </nav>
        </header>
        <main class="mb-auto p-5">
            @yield('content')
        </main>
    </div>
</section>
</body>
</html>
