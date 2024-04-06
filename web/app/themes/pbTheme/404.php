<?php get_header(); ?>

<main>
    <div class="max-w-screen-xl mx-auto px-4 flex items-center justify-start h-screen md:px-8">
        <div class="max-w-lg mx-auto space-y-3 text-center">
            <h3 class="text-blue-600 font-semibold">
                Erreur 404
            </h3>
            <p class="text-gray-800 text-4xl font-semibold sm:text-5xl">
                Page non trouvée
            </p>
            <p class="text-gray-600">
                Désolé, la page que vous recherchez est introuvable ou a été supprimée.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="/" class="mt-4 block py-2 px-4 text-white font-medium bg-blue-600 duration-150 hover:bg-blue-500 active:bg-blue-700 rounded-lg">
                    Accueil
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>