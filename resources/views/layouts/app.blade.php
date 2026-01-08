<!DOCTYPE html>
<html lang="es" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mi Portfolio' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-neutral-200 transition-colors duration-300">

    {{-- Navbar --}}
    <nav class="w-full py-4 flex justify-between items-center px-6 border-b border-neutral-800">
        <h1 class="font-semibold tracking-tight text-lg">Mi Portafolio</h1>

        {{-- Toggle dark mode --}}
        <button id="themeToggle"
            class="px-3 py-1 border border-neutral-700 rounded-md text-sm hover:bg-neutral-800 transition">
            Modo
        </button>
    </nav>

    {{-- Contenido de las vistas --}}
    <main class="max-w-4xl mx-auto p-6">
        {{ $slot }}
    </main>

    <script>
        const btn = document.getElementById("themeToggle");
        const html = document.documentElement;

        btn.addEventListener("click", () => {
            html.classList.toggle("dark");
            localStorage.setItem("theme", html.classList.contains("dark") ? "dark" : "light");
        });

        if (localStorage.getItem("theme") === "light") {
            html.classList.remove("dark");
        }
    </script>

</body>

</html>