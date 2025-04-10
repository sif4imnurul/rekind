<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rekind')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --judul: #1D3A6D;
            --sub-judul: #4AA0C4;
            --button: #7BB7D1;
            --4: #A4C9DF;
            --highlight-text-box: #D6E4F5;
            --6: #FFFFFF;
            --sub-text: #737373;
            --line: #E77215;
            --yellow: #FFC500;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100 w-full" x-data="{ open: false, profileOpen: false, showMessage: true }">

    @include('components.navbar.after-login.navbar-login')

    <div class="w-full min-h-screen bg-white overflow-hidden flex flex-col">
        @yield('content')
    </div>

    @include('components.footer.footer')

</body>

</html>
