</div>
<footer class="bg-gray-100 mt-auto">
    <section class="bg-gray-100 py-8">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-center items-center mb-12">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">Rejoignez-nous</h2>
                <p class="text-center text-gray-500 leading-relaxed max-w-lg">
                    Découvrez nos opportunités de carrière et postulez dès aujourd'hui.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 lg:gap-12">
                <a href="#" class="block bg-white shadow-md hover:shadow-lg rounded-lg py-4 px-6 text-center transition duration-300 ease-in-out">
                    <div class="flex justify-center items-center mb-2">
                        <span class="text-gray-700 font-medium">Candidature spontanée</span>
                    </div>
                    <p class="text-gray-600">Postulez pour des opportunités qui vous intéressent.</p>
                </a>
                <a href="#" class="block bg-white shadow-md hover:shadow-lg rounded-lg py-4 px-6 text-center transition duration-300 ease-in-out">
                    <div class="flex justify-center items-center mb-2">
                        <span class="text-gray-700 font-medium">Nos offres</span>
                    </div>
                    <p class="text-gray-600">Consultez nos postes disponibles actuellement.</p>
                </a>
            </div>
        </div>
    </section>
    <span class="border-t border-gray-200 block"></span>

    <div class="mx-auto max-w-5xl px-4 py-8 sm:px-6 lg:px-8">


        <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500">
            <?= get_option('agence_texte') ?>
        </p>

        <?php wp_nav_menu([
            'menu' => 4,
            'container' => 'ul',
            'menu_class' => 'mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12'
        ]);
        ?>

        <ul class="mt-12 flex justify-center gap-6 md:gap-8">
            <?php
            // Tableau associatif des réseaux sociaux avec leurs liens et logos correspondants
            $social_media = [
                'facebook' => ['Facebook'],
                'twitter' => ['Twitter'],
                'instagram' => ['Instagram'],
                'linkedin' => ['LinkedIn'],
            ];

            // Parcourir chaque réseau social
            foreach ($social_media as $network => $name) {
                // Récupérer le lien et le logo du réseau social à partir des options de personnalisation
                $link = get_theme_mod($network . '_link');
                $logo = get_theme_mod($network . '_logo');

                // Vérifier si le lien et le logo existent
                if (!empty($link) && !empty($logo)) {
                    echo '<li>';
                    echo '<a href="' . esc_url($link) . '" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-gray-700/75">';
                    echo '<span class="sr-only">' . ucfirst($name[0]) . '</span>';
                    echo wp_get_attachment_image($logo, 'full', false, ['class' => 'w-9 h-9']);
                    echo '</a>';
                    echo '</li>';
                }
            }
            ?>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>