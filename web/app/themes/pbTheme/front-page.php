<?php get_header(); ?>
</div>
<div class="h-screen isolate bg-white -z-10">
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
        <defs>
            <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
    </svg>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
            <div class="mt-24 sm:mt-32 lg:mt-16">
                <a href="#" class="inline-flex space-x-6">
                    <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-600/10">Distribution spécialisée</span>
                </a>
            </div>
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Groupe Méré</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">Le Groupe Méré, expert en distribution spécialisée, regroupe des franchises comme La Halle au Sommeil, Foir'Fouille et Cavavin. Renforcez votre visibilité en ligne avec nous.</p>
            <div class="mt-10 flex items-center gap-x-6">
                <a href="#" class="bg-indigo-dye text-white border-none px-4 py-2 rounded-md duration-500 ease-in-out hover:bg-indigo-700">Nos Activités</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Découvrir plus <span aria-hidden="true">→</span></a>
            </div>
        </div>
        <div class="mt-16 lg:mt-0 lg:ml-10 lg:flex lg:items-center lg:justify-end">
            <img class="w-full max-w-xl rounded-lg shadow-lg" src="https://picsum.photos/600/400" alt="Image du Groupe Méré">
        </div>
    </div>
</div>

<div class="bg-gray-100 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Nos Activités</h2>
        <div class="mt-10 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-8">
            <div class="text-center">
                <img src="https://picsum.photos/200" alt="La Halle au Sommeil" class="mx-auto h-56 w-56 rounded-full">
                <h3 class="mt-6 text-xl font-semibold text-gray-900">La Halle au Sommeil</h3>
                <p class="mt-4 text-gray-600">Des magasins spécialisés dans la vente de matelas et accessoires pour un sommeil de qualité.</p>
            </div>
            <div class="text-center">
                <img src="https://picsum.photos/201" alt="Foir'Fouille" class="mx-auto h-56 w-56 rounded-full">
                <h3 class="mt-6 text-xl font-semibold text-gray-900">Foir'Fouille</h3>
                <p class="mt-4 text-gray-600">Des magasins discount proposant une large gamme de produits pour la maison.</p>
            </div>
            <div class="text-center">
                <img src="https://picsum.photos/202" alt="Cavavin" class="mx-auto h-56 w-56 rounded-full">
                <h3 class="mt-6 text-xl font-semibold text-gray-900">Cavavin</h3>
                <p class="mt-4 text-gray-600">Des caves à vins offrant une sélection variée de vins et spiritueux de qualité.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Opportunités de Carrière</h2>
        <p class="mt-4 text-gray-600 text-center">Rejoignez le Groupe Méré et développez votre carrière dans un environnement dynamique et innovant.</p>
        <div class="mt-10 flex justify-center">
            <a href="#" class="bg-indigo-dye text-white border-none px-4 py-2 rounded-md duration-500 ease-in-out hover:bg-picton-blue">Voir les Offres d'Emploi</a>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Actualités</h2>
        <p class="mt-4 text-gray-600 text-center">Découvrez les dernières actualités et mises à jour du Groupe Méré.</p>
        <div class="mt-10 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-8">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/post'); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Contactez-nous</h2>
        <p class="mt-4 text-gray-600 text-center">Pour toute demande d'information ou de partenariat, n'hésitez pas à nous contacter via le formulaire ci-dessous.</p>
        <div class="mt-10 flex justify-center">
            <a href="#" class="bg-indigo-dye text-white border-none px-4 py-2 rounded-md duration-500 ease-in-out hover:bg-picton-blue">Formulaire de Contact</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
