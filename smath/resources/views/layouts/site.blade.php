<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMA TUNAS HARAPAN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <header class="sticky top-0 bg-white shadow-md z-50">
        <div class="container mx-auto relative flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('assets/img/LOGO SMA TERBARU.png') }}" alt="" class="h-12 mr-3">
                <h1 class="text-xl font-bold">SMA TUNAS HARAPAN</h1>
            </a>

            <nav class="hidden md:flex space-x-8">
                <a href="#hero" class="text-gray-600 hover:text-gray-900">Beranda</a>
                <a href="#about" class="text-gray-600 hover:text-gray-900">Tentang kami</a>
                <a href="#services" class="text-gray-600 hover:text-gray-900">Program unggulan</a>
                <a href="#team" class="text-gray-600 hover:text-gray-900">Guru kami</a>
                <a href="#berita" class="text-gray-600 hover:text-gray-900">Berita</a>
                <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-100">
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-bold">SMA TUNAS HARAPAN</h3>
                    <p class="mt-2 text-gray-600">Komplek BNI 46, pesing, Wijaya Kusuma, West Jakarta City</p>
                    <p class="mt-2 text-gray-600"><strong>Phone:</strong> (021) 5660066</p>
                    <p class="mt-2 text-gray-600"><strong>Email:</strong> Smatunasharapanadm@gmail.com</p>
                </div>
                <div>
                    <h4 class="text-lg font-bold">Useful Links</h4>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Beranda</a></li>
                        <li><a href="#about" class="text-gray-600 hover:text-gray-900">Tentang kami</a></li>
                        <li><a href="#services" class="text-gray-600 hover:text-gray-900">Program unggulan</a></li>
                        <li><a href="#team" class="text-gray-600 hover:text-gray-900">Guru kami</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold">Follow Us</h4>
                    <p class="mt-2 text-gray-600">ikuti juga sosial media kami</p>
                    <div class="mt-2 flex space-x-4">
                        <a href="https://www.tiktok.com/@sma_toenhard" target="_blank" class="text-gray-600 hover:text-gray-900">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="https://www.instagram.com/smatunasharapan/?utm_source=ig_web_button_share_sheet" target="_blank" class="text-gray-600 hover:text-gray-900">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6281617707087" target="_blank" class="text-gray-600 hover:text-gray-900">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://youtube.com/@smatunasharapan?si=RfVDD2jtu8vP_2a2" target="_blank" class="text-gray-600 hover:text-gray-900">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 py-4 text-center">
            <p>© <span id="year"></span> <strong class="px-1">SMA Tunas Harapan</strong>. All rights reserved.</p>
            <p>Developed by <a href="https://github.com/indramaulin76" target="_blank" class="text-blue-600 hover:underline">IndraMaulana</a></p>
        </div>
    </footer>

    <script>
        // Auto update year
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>

</html>
