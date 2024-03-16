<article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-xs m-6">
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full object-cover']) ?>
        <div class="bg-white p-4 sm:p-6">
            <time datetime="2022-10-10" class="block text-xs text-gray-500"> <?php the_date(); ?> </time>
            <h3 class="mt-0.5 text-lg text-gray-900"><?php the_title()  ?></h3>
            <?php the_terms(get_the_ID(), 'sport', '<div class="mt-2 text-xs text-gray-500">', ', ', '</div>') ?>
            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                <?php the_excerpt() ?>
            </p>
        </div>
    </a>
</article>