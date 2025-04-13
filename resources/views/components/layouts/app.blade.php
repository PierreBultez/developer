<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pierre Bultez - Développeur web et hébergement de sites web dans le Vaucluse">
    <meta name="keywords" content="développeur web, hébergement, Vaucluse, WordPress, Magento, Laravel">
    <title>{{ $title ?? 'Pierre Bultez - Développeur Web' }}</title>
    <link rel="stylesheet" href="https://use.typekit.net/fbq1tkp.css">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header class="bg-brand-beige py-4 px-6 flex justify-between items-center container mx-auto">
    <div class="flex items-center">
        <a href="/" class="text-4xl sm:text-7xl text-brand-blue font-family-rust tracking-wide">Pierre Bultez</a>
    </div>

    <div class="flex items-center">
        <span class="text-xl sm:text-3xl text-brand-blue font-family-rust mr-4 hidden md:inline-block">Not only developer...</span>

{{--        <label class="swap swap-rotate">--}}
{{--            <!-- this hidden checkbox controls the state -->--}}
{{--            <input type="checkbox" class="theme-controller" id="theme-toggle" value="synthwave" />--}}

{{--            <!-- sun icon -->--}}
{{--            <svg--}}
{{--                class="swap-off h-10 w-10 fill-current"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                viewBox="0 0 24 24">--}}
{{--                <path--}}
{{--                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />--}}
{{--            </svg>--}}

{{--            <!-- moon icon -->--}}
{{--            <svg--}}
{{--                class="swap-on h-10 w-10 fill-current"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                viewBox="0 0 24 24">--}}
{{--                <path--}}
{{--                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />--}}
{{--            </svg>--}}
{{--        </label>--}}
    </div>
</header>

<main>
    {{ $slot }}
</main>

<footer class="pb-16">
    <div class="footer footer-horizontal footer-center p-10 bg-neutral text-neutral-content container mx-auto rounded-3xl">
        <nav class="grid grid-flow-col gap-12">
            <a href="{{ route('privacy') }}" class="link link-hover">Confidentialité</a>
            <a href="{{ route('legal') }}" class="link link-hover">Mentions légales</a>
        </nav>
        <nav>
            <div class="grid grid-flow-col gap-16">
                <a href="https://github.com/PierreBultez" target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        viewBox="0 0 24 24"
                        class="fill-current github-gradient">

                        <defs>
                            <linearGradient id="github-gradient" x1="0%" y1="100%" x2="0%" y2="0%">
                                <stop offset="0%" stop-color="oklch(38% 0.189 293.745)" /> <!-- violet-900 -->
                                <stop offset="100%" stop-color="oklch(59.1% 0.293 322.896)" /> <!-- fuchsia-600 -->
                            </linearGradient>
                        </defs>

                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                    </svg>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61564566744970" target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        viewBox="0 0 24 24"
                        class="fill-current hover:fill-blue-500">
                        <path
                            d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/pierre-bultez-5699b52a8" target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        viewBox="-143 145 512 512"
                        class="fill-current hover:fill-sky-600">
                        <path
                            d="M113 145c-141.4 0-256 114.6-256 256s114.6 256 256 256 256-114.6 256-256-114.6-256-256-256zM41.4 508.1H-8.5V348.4h49.9v159.7zM15.1 328.4h-.4c-18.1 0-29.8-12.2-29.8-27.7 0-15.8 12.1-27.7 30.5-27.7s29.7 11.9 30.1 27.7c.1 15.4-11.6 27.7-30.4 27.7zM241 508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4-14.9 0-23.2 10-27 19.6-1.4 3.4-1.2 8.2-1.2 13.1v86.3H71.8s.7-146.4 0-159.7h56.1v25.1c3.3-11 21.2-26.6 49.8-26.6 35.5 0 63.3 23 63.3 72.4v88.8z"></path>
                    </svg>
                </a>
            </div>
        </nav>
        <aside>
            <p>Copyright © 2025 - All right reserved by Pierre Bultez</p>
        </aside>
    </div>
</footer>

@livewireScripts
<script>
    // Gestion du thème sombre
    document.addEventListener('DOMContentLoaded', function() {
        const themeToggle = document.getElementById('theme-toggle');

        // Récupérer le thème du localStorage
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.classList.toggle('dark', savedTheme === 'dark');
        themeToggle.checked = savedTheme === 'dark';

        // Sauvegarder le thème dans le localStorage
        themeToggle.addEventListener('change', function() {
            const isDark = this.checked;
            document.documentElement.classList.toggle('dark', isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    });
</script>
<livewire:components.cookie-banner />
</body>
</html>
