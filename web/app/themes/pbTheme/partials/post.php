<article class="flex flex-col items-start justify-between">
    <div class="relative w-full">
        <a href="<?php the_permalink() ?>" class="hover:text-gray-900">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]']) ?>
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </a>
    </div>
    <div class="max-w-xl">
        <div class="mt-8 flex items-center gap-x-4 text-xs">
            <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="<?php the_permalink() ?>">
                    <!-- <span class="absolute inset-0"></span> -->
                    <?php the_title()  ?>
                </a>
            </h3>
            <time datetime="<?= get_the_date('c') ?>" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                <?php the_date(); ?>
            </time>
        </div>
        <div class="group relative">
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                <a href="<?php the_permalink() ?>" class="hover:text-gray-900">
                    <?php the_excerpt() ?>
                </a>
            </p>
        </div>
    </div>
</article>