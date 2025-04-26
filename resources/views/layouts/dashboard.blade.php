<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rekind')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
</head>

<body class="bg-gray-100 min-h-screen w-full flex font-sans text-[var(--judul)]">

    <!-- Sidebar -->
    <aside class="w-64 bg-white flex-shrink-0 hidden md:block">
        @include('components.admin.sidebar')
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <header class="bg-white px-6 py-3 flex items-center justify-between">
            <button id="toggleSidebar" class="md:hidden text-gray-600 text-xl">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="text-xl font-semibold">@yield('title', 'Dashboard')</h1>
            <div class="flex items-center gap-3 text-[var(--button)]">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24" width="48" height="48">
                    <path
                        d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z">
                    </path>
                </svg>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-6 bg-gray-50">
            @yield('content')
        </main>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
