</div>
<footer class="bg-gray-100 mt-auto">
    <section class="bg-gray-100 py-6">
        <div class="mx-auto max-w-5xl px-3 sm:px-4 lg:px-6">
            <div class="flex flex-col justify-center items-center mb-9">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-3">Rejoignez-nous</h2>
                <p class="text-center text-gray-500 leading-relaxed max-w-md">
                    Découvrez nos opportunités de carrière et postulez dès aujourd'hui.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 lg:gap-9">
                <a href="/candidature-spontanee" class="block bg-white shadow-md hover:shadow-lg rounded-lg py-3 px-5 text-center transition duration-300 ease-in-out">
                    <div class="flex justify-center items-center mb-1">
                        <span class="text-gray-700 font-medium">Candidature spontanée</span>
                    </div>
                    <p class="text-gray-600">Postulez pour des opportunités qui vous intéressent.</p>
                </a>
                <a href="#" class="block bg-white shadow-md hover:shadow-lg rounded-lg py-3 px-5 text-center transition duration-300 ease-in-out">
                    <div class="flex justify-center items-center mb-1">
                        <span class="text-gray-700 font-medium">Nos offres</span>
                    </div>
                    <p class="text-gray-600">Consultez nos postes disponibles actuellement.</p>
                </a>
            </div>
        </div>
    </section>
    <span class="border-t border-gray-200 block"></span>

    <div class="mx-auto max-w-5xl px-3 py-6 sm:px-4 lg:px-6">


        <p class="mx-auto mt-4 max-w-md text-center leading-relaxed text-gray-500">
            <?= get_option('agence_texte') ?>
        </p>

        <?php wp_nav_menu([
            'menu' => 4,
            'container' => 'ul',
            'menu_class' => 'mt-6 flex flex-wrap justify-center gap-4 md:gap-6 lg:gap-9'
        ]);
        ?>

        <ul class="mt-6 flex justify-center gap-4 md:gap-6">
            <?php
            // Récupération des réseaux sociaux
            $social_media = carbon_get_theme_option('social_media');
            // Vérification si des réseaux sociaux sont disponibles
            if ($social_media) {
                foreach ($social_media as $social) {
                    $name = $social['name'];
                    $link = $social['link'];
                    $icon_class = $social['logo']; // Utilisez la classe d'icône WordPress ici

                    // Assurez-vous que les données sont non vides avant de les afficher
                    if ($name && $link && $icon_class) {
                        echo '<a href="' . esc_url($link) . '" class="mr-3">';
                        echo '<span class="dashicons ' . esc_attr($icon_class) . '"></span>';
                        echo '</a>';
                    }
                }
            }
            ?>
        </ul>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>