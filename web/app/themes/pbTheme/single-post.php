<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="max-w-2xl px-6 py-16 mx-auto space-y-12">
            <article class="space-y-8 dark:bg-gray-800 dark:text-gray-50">
                <div class="space-y-6">
                    <h1 class="text-4xl font-bold md:tracki md:text-5xl"><?php the_title() ?></h1>
                    <div class="flex flex-col items-start justify-between w-full md:flex-row md:items-center dark:text-gray-400">
                        <div class="flex items-center md:space-x-2">
                            <img src="https://source.unsplash.com/75x75/?portrait" alt="" class="w-4 h-4 border rounded-full dark:bg-gray-500 dark:border-gray-700">
                            <p class="text-sm"><?= the_author(); ?> • <?php the_date(); ?></p>
                        </div>
                        <p class="flex-shrink-0 mt-3 text-sm md:mt-0"><?= calculate_reading_time() ?> min de lecture</p>
                    </div>
                </div>
                <div class="dark:text-gray-100">
                    <p><?php the_content() ?></p>
                </div>
            </article>
            <div>
                <div class="flex flex-wrap py-6 gap-2 border-t border-dashed dark:border-gray-400">
                    <a rel="noopener noreferrer" href="#" class="px-3 py-1 rounded-sm hover:underline dark:bg-violet-400 dark:text-gray-900">#MambaUI</a>
                    <a rel="noopener noreferrer" href="#" class="px-3 py-1 rounded-sm hover:underline dark:bg-violet-400 dark:text-gray-900">#TailwindCSS</a>
                    <a rel="noopener noreferrer" href="#" class="px-3 py-1 rounded-sm hover:underline dark:bg-violet-400 dark:text-gray-900">#Angular</a>
                </div>
                <div class="space-y-2">
                    <h4 class="text-lg font-semibold">Related posts</h4>
                    <ul class="ml-4 space-y-1 list-disc">
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:underline">Nunc id magna mollis</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:underline">Duis molestie, neque eget pretium lobortis</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:underline">Mauris nec urna volutpat, aliquam lectus sit amet</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>