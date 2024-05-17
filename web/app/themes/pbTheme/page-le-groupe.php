<?php get_header(); ?>
</div>
<div class="text-center bg-gradient-to-r from-indigo-dye to-picton-blue text-white py-20 mb-12">
    <h1 class="text-5xl font-bold">Qui sommes-nous ?</h1>
</div>

<main class="">
    <div class="container mx-auto px-4 py-8">

        <!-- Introduction Section -->
        <section class="text-center mb-12">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-6">Bienvenue sur la page de présentation du Groupe Méré</h2>
                <p class="text-lg text-gray-700">Nous sommes un acteur majeur dans la distribution spécialisée, regroupant plusieurs franchises de renom. Notre mission est d'offrir des produits et services de qualité à nos clients tout en développant des partenariats stratégiques et en attirant les meilleurs talents.</p>
            </div>
        </section>

        <!-- History Section -->
        <section class="mb-12 grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-100 py-12 px-6 rounded-lg shadow-lg">
            <div>
                <h2 class="text-3xl font-bold mb-6">Notre Histoire</h2>
                <h3 class="text-2xl font-semibold mb-4">Une Histoire de Passion et d'Innovation</h3>
                <p class="text-lg text-gray-700">Depuis sa création, le Groupe Méré a toujours misé sur l'innovation et la qualité pour se démarquer dans le secteur de la distribution spécialisée. Au fil des années, nous avons su diversifier nos activités et étendre notre réseau de franchises pour répondre aux besoins variés de nos clients.</p>
            </div>
            <div class="flex items-center justify-center">
                <img src="<?= esc_url(wp_get_attachment_image_url(136, 'full')); ?>" alt="Image représentant l'histoire du Groupe Méré" class="rounded-lg shadow-lg">
            </div>
        </section>

        <!-- Values Section -->
        <section class="mb-12 bg-white py-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold">Nos Valeurs</h2>
                <h3 class="text-2xl font-semibold text-gray-700">Nos Valeurs Fondamentales</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-black">
                    <h4 class="text-xl font-semibold mb-2">Qualité</h4>
                    <p>Nous nous engageons à offrir des produits et services de haute qualité pour satisfaire nos clients.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-black">
                    <h4 class="text-xl font-semibold mb-2">Innovation</h4>
                    <p>L'innovation est au cœur de notre stratégie, nous permettant d'améliorer constamment nos offres.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-black">
                    <h4 class="text-xl font-semibold mb-2">Proximité</h4>
                    <p>Nous valorisons la proximité avec nos clients, partenaires et collaborateurs.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-black">
                    <h4 class="text-xl font-semibold mb-2">Responsabilité</h4>
                    <p>Nous agissons de manière responsable et durable, en respectant l'environnement et les communautés locales.</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Franchises Section -->
    <section class="mb-12 bg-gray-100 py-12">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">Nos Franchises</h2>
            <h3 class="text-2xl font-semibold text-gray-700">Un Réseau de Franchises Diversifié</h3>
            <h4 class="text-xl font-medium text-gray-700">Découvrez les enseignes qui composent le Groupe Méré</h4>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-3 gap-8 px-16">
            <?php $marques = new WP_Query([
                'post_type' => 'marque',
                'posts_per_page' => -1
            ]); ?>
            <?php while ($marques->have_posts()) : $marques->the_post(); ?>
                <li class="border rounded-lg bg-white shadow-lg">
                    <div class="flex flex-col justify-center p-4 items-center h-[120px]">
                        <?php /* the_post_thumbnail('2048x2048', ['class' => '']) */ ?>
                        <div class="space-y-2 text-center">
                            <h4 class="text-gray-800 font-semibold"><?php the_title(); ?></h4>
                            <p class="text-gray-600 text-sm"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                    <div class="py-2 px-2 border-t text-center">
                        <a href="<?php the_permalink(); ?>" class="text-picton-blue hover:text-indigo-dye text-sm font-medium">
                            Découvrir
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </section>
    <div class="container mx-auto px-4 py-8">
        <!-- Partners Section -->
<!--         <section class="mb-12 bg-white py-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold">Nos Partenaires</h2>
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">Partenariats Stratégiques</h3>
                <p class="text-lg text-gray-700 mb-6">Le succès du Groupe Méré repose également sur des partenariats solides et stratégiques avec des acteurs clés du secteur. Ces collaborations nous permettent de renforcer notre réseau et d'innover continuellement.</p>
                <ul class="list-disc pl-5 space-y-2 mx-auto max-w-2xl text-left">
                    <li class="text-lg text-gray-700">Collaboration avec des fournisseurs de renommée mondiale.</li>
                    <li class="text-lg text-gray-700">Projets conjoints avec des entreprises leaders pour développer de nouvelles solutions.</li>
                </ul>
            </div>
        </section> -->

        <!-- Career Opportunities Section -->
        <section class="mb-12 text-center bg-gray-100 py-12">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-6">Opportunités de Carrière</h2>
                <h3 class="text-2xl font-semibold mb-4 text-gray-700">Rejoignez-nous</h3>
                <p class="text-lg text-gray-700 mb-6">Le Groupe Méré est toujours à la recherche de nouveaux talents pour rejoindre ses équipes dynamiques. Nous offrons des opportunités de carrière enrichissantes dans un environnement stimulant.</p>
                <ul class="list-disc pl-5 space-y-2 text-left inline-block">
                    <li class="text-lg text-gray-700">Un environnement de travail innovant et motivant.</li>
                    <li class="text-lg text-gray-700">Des opportunités de développement et de progression de carrière.</li>
                    <li class="text-lg text-gray-700">Une culture d'entreprise axée sur l'excellence et la collaboration.</li>
                </ul>
                <a href="#" class="mt-6 inline-block hover:bg-picton-blue text-white py-3 px-6 rounded-lg shadow-lg bg-indigo-dye">Découvrir les Offres d'Emploi</a>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="mb-12 text-center bg-white py-12">
            <div class="max-w-2xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-6">Contact</h2>
                <h3 class="text-2xl font-semibold mb-4 text-gray-700">Prenez Contact avec Nous</h3>
                <p class="text-lg text-gray-700 mb-6">Nous serions ravis de vous entendre. Pour toute demande d'information, de partenariat ou pour en savoir plus sur nos opportunités de carrière, n'hésitez pas à nous contacter.</p>
                <a href="#" class="hover:bg-picton-blue text-white py-3 px-6 rounded-lg shadow-lg bg-indigo-dye">Accéder au Formulaire de Contact</a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>