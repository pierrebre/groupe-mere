<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="max-w-2xl px-6 py-16 mx-auto space-y-12">
            <article class="space-y-8 dark:bg-gray-800 dark:text-gray-50">
                <div class="space-y-6">
                    <h1 class="text-4xl font-bold md:tracki md:text-5xl"><?php the_title() ?></h1>
                    <div class="flex flex-col items-start justify-between w-full md:flex-row md:items-center dark:text-gray-400">
                        <div class="flex items-center md:space-x-2">
                            <?php if (get_avatar(get_the_author_meta('ID'))) : ?>
                                <img src="<?= get_avatar_url(get_the_author_meta('ID')) ?>" alt="<?= the_author() ?>" class="w-8 h-8 rounded-full">
                            <?php endif; ?>
                            <p class="text-sm"><?php the_author(); ?> • <?php the_date(); ?></p>
                        </div>
                    </div>
<!--                     <?php if (has_post_thumbnail()) : ?>
                        <div class="w-full mb-20">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full rounded-l bg-gray-100 object-cover sm:aspect-[2/1]']) ?>
                        </div>
                    <?php endif; ?> -->
                </div>
                <div class="dark:text-gray-100">
                    <p><?php the_content() ?></p>
                </div>
            </article>
            <div>
                <div class="flex flex-wrap py-6 gap-2 border-t border-dashed dark:border-gray-400">
                    <!-- Tags of posts -->
                </div>
                <div class="space-y-2">
                    <h4 class="text-lg font-semibold">Articles similaires</h4>
                    <ul class="ml-4 space-y-1 list-disc">
                        <?php
                        $relatedPosts = new WP_Query([
                            'posts_per_page' => 3,
                            'post__not_in' => [get_the_ID()],
                            'category__in' => wp_get_post_categories(get_the_ID()),
                            'orderby' => 'rand'
                        ]);
                        if ($relatedPosts->have_posts()) :
                            while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
                        ?>
                                <li>
                                    <a href="<?php the_permalink() ?>" class="hover:underline"><?php the_title() ?></a>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>