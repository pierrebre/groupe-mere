<?php

$job_marque_id = get_post_meta(get_the_ID(), '_job_marque', true);

get_header();
?>

<section class="w-full py-16">
    <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl text-center">
        <?php the_title(); ?>
    </h1>
    <?= get_template_part('partials/job_tags', null, array('class' => 'mt-8')); ?>
    <p class="mt-1 text-xs text-gray-500">
        <?php echo time_elapsed_string($post->post_date); ?>
    </p>
    <div id="job-content" class="mt-4">
        <?php the_content(); ?>
    </div>

    <h4 class="mt-8 text-2xl font-semibold">D'autres offres de la marque</h4>

    <div class="flex flex-row items-center gap-x-4 overflow-auto py-4">
        <?php
        $relatedJobs = new WP_Query([
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'post_type' => 'job',
            'post__not_in' => array(get_the_ID()),
            'meta_query' => array(
                array(
                    'key' => 'job_marque',
                    'value' => $job_marque_id,
                    'compare' => 'LIKE',
                ),
            ),
        ]);

        if ($relatedJobs->have_posts()):
            while ($relatedJobs->have_posts()):
                $relatedJobs->the_post();

                get_template_part('partials/job-card', null, array('query' => $relatedJobs));
            endwhile;
        else: ?>
            <p class="text-center text-gray-500">
                Aucune autre offre de la marque n'a été trouvée
            </p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>