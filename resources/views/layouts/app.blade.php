<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Stripe Demo')</title>

    {{-- Option B (Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Option A (CDN) use kar rahe hon to upar wali line hata kar yeh lagayein:
    <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="bg-gray-100 min-h-screen text-gray-800">
    <div class="max-w-5xl mx-auto px-4 py-10">
        @yield('content')
    </div>
</body>
</html>