<?php

/**
 * Template Name: Page avec bannière
 * Template Post Type: page, post
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="bg-blue-600 text-white text-center py-4">
            <h1><?php the_title() ?></h1>
            <p>Ici la banniere</p>
        </div>
        <article>
            <h1><?php the_title() ?></h1>
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
            <p><?php the_content() ?></p>
        </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>