<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Khanh Nguyen">
    <meta name="author" content="Khanh Nguyen">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta name="referrer" content="no-referrer">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('/storage/assets/site_favicon.ico') }}">
    <meta name=" description" content= "{{ getSiteSetting()->site_description ?? "Khanh Nguyen's blog" }}">
    <title>@yield('title', getSiteSetting()->site_name ?? "Khanh Nguyen's blog")</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased dark:bg-black dark:text-white/50">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 relative">
        <!-- Page Navigation -->
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="mt-[150px] w-screen">
            {{ $slot }}
        </main>

        @include('layouts.top')

        <x-contact-modal name="contact-modal" :show="false" defaultPurpose="Đăng ký dùng thử">
            <!-- Content of the modal -->
        </x-contact-modal>

    </div>

    <!-- Page Footer -->
    @include('layouts.footer')
</body>

@stack('scripts')

</html>
