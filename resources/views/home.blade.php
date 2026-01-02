<x-layouts.app title="Inicio">
    @include('partials.hero')
    @include('partials.about')
    <section class="text-center mt-10">
        <h2 class="text-3xl font-bold mb-4">Hola, soy Aldo 👋</h2>
        <p class="text-neutral-400 max-w-xl mx-auto">
            Desarrollador Web • Camarero • Apasionado del barismo • Aprendiendo Laravel
        </p>

        <button class="mt-6 px-5 py-2 rounded-lg border border-neutral-700 hover:bg-neutral-800 transition">
            Ver proyectos
        </button>
    </section>
</x-layouts.app>