<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta itemprop="url" content="https://polinemaesports.id/"/>
    <meta itemprop="name" content="Polinema Esports"/>
    <title>Polinema Esports</title>
    <link rel="icon" href="content/polinemaesports.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="antialiased bg-gray-100">
    @include('layouts.header')

    <main class="mt-20 py-4">
        @yield('content')
    </main>

    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        // JavaScript untuk toggle menu dropdown pada mobile
        document.addEventListener('DOMContentLoaded', function() {
            var mobileMenuButton = document.getElementById('mobile-menu-button');
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.style.display = 'none';

            // Event listener untuk tombol menu mobile
            mobileMenuButton.addEventListener('click', function() {
                if (mobileMenu.style.display === 'block') {
                    mobileMenu.style.display = 'none';
                } else {
                    mobileMenu.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>
