<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mi Portfolio' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/d10a6cd004.js" crossorigin="anonymous"></script>
</head>

<body
    class="bg-neutral-50 text-neutral-800 dark:bg-neutral-900 dark:text-neutral-100">

    <nav
        class="w-full py-4 flex justify-between items-center px-6
               border-b border-neutral-200 dark:border-neutral-800">

        <h1 class="font-semibold tracking-tight text-lg">
            Mi Portafolio
        </h1>

        <button id="cambiarTema"
            class="px-3 py-1 text-sm rounded-md border
                   border-neutral-300 dark:border-neutral-700
                   hover:bg-neutral-100 dark:hover:bg-neutral-800
                   transition">
            Modo
        </button>
    </nav>

    <main class="max-w-4xl mx-auto p-6">
        {{ $slot }}
    </main>

    <script>
        const btn = document.getElementById("cambiarTema");
        const html = document.documentElement;

        // Estado inicial
        if (localStorage.getItem("theme") === "dark") {
            html.classList.add("dark");
        }

        btn.addEventListener("click", () => {
            html.classList.toggle("dark");

            const theme = html.classList.contains("dark") ? "dark" : "light";
            localStorage.setItem("theme", theme);
        });
    </script>


</body>

</html>