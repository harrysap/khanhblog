@props([
    'darkMode' => false,
    'docSearch' => true,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <x-seo::meta />
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/styles/default.min.css">
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/storage/assets/site_favicon.ico') }}" />
    <link rel="icon" type="image/x-icon" sizes="32x32" href="/{{ asset('/storage/assets/site_favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/storage/assets/site_favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/storage/assets/site_favicon.ico') }}" />
    <link rel="manifest" href="/favicon/site.webmanifest?v=w1dBNxT7Wg" />
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=w1dBNxT7Wg" color="#fdae4b" />
    <link rel="shortcut icon" href="/favicon/favicon.ico?v=w1dBNxT7Wg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="msapplication-TileColor" content="#ffc40d" />
    <meta name="msapplication-config" content="/favicon/browserconfig.xml?v=w1dBNxT7Wg" />
    <meta name="theme-color" content="#ffffff" />
</script>

    <!-- Fonts -->
    @googlefonts

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    {{-- @vite('resources/css/app.css') --}}

    <!-- Scripts -->
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative min-h-screen overflow-x-clip text-midnight antialiased dark:bg-black dark:text-white/50"
    style="font-family: 'Manrope', sans-serif">
    <div id="docsearch" class="hidden"></div>
    <div class="bg-gray-100 dark:bg-gray-900">
        <!-- Page Navigation -->
        @include('layouts.navigation')
        <main class="mt-[100px] md:mt-[130px]">
            {{ $slot }}
        </main>
        @include('layouts.top')
        <x-contact-modal name="contact-modal" :show="false" defaultPurpose="Đăng ký dùng thử">
            <!-- Content of the modal -->
        </x-contact-modal>
        @include('layouts.footer')
    </div>
</body>
@stack('scripts')
<script src="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
<script>
    hljs.highlightAll();
    const copyButtonLabel = "Copy Code";

    // use a class selector if available
    let blocks = document.querySelectorAll("pre");

    blocks.forEach((block) => {
        // only add button if browser supports Clipboard API
        if (navigator.clipboard) {
            let button = document.createElement("button");
            button.className = "copyBtn";

            // Create SVG element
            let svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute("width", "24");
            svg.setAttribute("height", "24");
            svg.setAttribute("viewBox", "0 0 24 24");
            svg.setAttribute("fill", "none");
            svg.setAttribute("stroke", "currentColor");
            svg.setAttribute("stroke-width", "2");
            svg.setAttribute("stroke-linecap", "round");
            svg.setAttribute("stroke-linejoin", "round");
            svg.classList.add("copySvg");

            // Add a copy icon (you can replace this path with another icon)
            let path = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path.setAttribute("d",
                "M8 2H16C16.55 2 17 2.45 17 3V15C17 15.55 16.55 16 16 16H8C7.45 16 7 15.55 7 15V3C7 2.45 7.45 2 8 2ZM5 5H3C2.45 5 2 5.45 2 6V20C2 20.55 2.45 21 3 21H13C13.55 21 14 20.55 14 20V18"
            );
            svg.appendChild(path);

            // Append the SVG into the button
            button.appendChild(svg);
            block.insertBefore(button, block.firstChild);

            // Add click event to copy the code
            button.addEventListener("click", async () => {
                await copyCode(block, button);
            });
        }
    });

    async function copyCode(block, button) {
        let code = block.querySelector("code");
        let text = code.innerText;

        await navigator.clipboard.writeText(text);

        // visual feedback that task is completed
        button.querySelector("svg").style.fill = "green"; // Change color of SVG

        setTimeout(() => {
            button.querySelector("svg").style.fill = ""; // Reset to original color
        }, 700);
    }
</script>

</html>
