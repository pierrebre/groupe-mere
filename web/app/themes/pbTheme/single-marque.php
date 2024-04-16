<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                        <?php the_post_thumbnail('full', ['class' => '']) ?>
                    </div>

                    <div class="lg:py-24">
                        <h2 class="text-3xl font-bold sm:text-4xl"><?= the_title() ?></h2>

                        <p class="mt-4 text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                            eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                            quidem quam repellat.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php
$args = array(
    'post_type'  => 'job',
    'meta_query' => array(
        array(
            'key'     => 'job_marque',
            'value'   => get_the_ID(),
            'compare' => 'LIKE',
        ),
    ),
);

$jobs_query = new WP_Query($args);

if ($jobs_query->have_posts()) {

    while ($jobs_query->have_posts()) {
        $jobs_query->the_post();
?>
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                        <?php the_post_thumbnail('full', ['class' => '']) ?>
                    </div>

                    <div class="lg:py-24">
                        <h2 class="text-3xl font-bold sm:text-4xl"><?= the_title() ?></h2>

                        <a href="<?= get_the_permalink() ?>" class="mt-4 text-blue-600 hover:underline">Voir l'offre</a>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
    wp_reset_postdata();
} else {
    // Aucun post trouvé
    echo 'Aucun post trouvé';
}
?>

<?php get_footer(); ?>