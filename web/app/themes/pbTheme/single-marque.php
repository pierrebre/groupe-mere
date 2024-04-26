<?php get_header();

$args = array(
    'post_type' => 'job',
    'meta_query' => array(
        array(
            'key' => 'job_marque',
            'value' => get_the_ID(),
            'compare' => 'LIKE',
        ),
    ),
);

$jobs_query = new WP_Query($args);

the_post(); ?>

<section class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <h2 class="mt-8 text-3xl font-bold sm:text-4xl text-center lg:text-start"><?= the_title() ?></h2>
    <div class="flex flex-col-reverse lg:flex-row mt-4 lg:mt-0 gap-2 items-center justify-between">

        <p class="mt-4 text-gray-600 text-justify lg:text-start">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
            eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
            quidem quam repellat.
        </p>

        <?php the_post_thumbnail('2048x2048', ['class' => 'w-2/6']) ?>
    </div>
    <div class="flex flex-col gap-4 mt-12 mb-8">
        <p class="text-2xl text-center lg:text-start">
            Les jobs la marque
        </p>
        <?php if ($jobs_query->have_posts()) {
            while ($jobs_query->have_posts()) {
                $jobs_query->the_post();
                get_template_part('partials/job-card', null, array('query' => $jobs_query));
            }
            wp_reset_postdata();
        } else { ?>
            <div class="flex flex-col items-center justify-center gap-4">
                <p class="text-center text-gray-500">
                    Aucune offre n'a été trouvée
                </p>
            </div>
        <?php } ?>
    </div>
</section>
<?php

get_footer(); ?>