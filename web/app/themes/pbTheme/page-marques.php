<?php get_header(); ?>

<section class="py-16">
    <div class="px-4 md:px-8">
        <div class="text-center">
            <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl">
                Nos marques
            </h1>
            <p class="text-gray-600 mt-2 text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptate cum odit atque dolores sint voluptatibus suscipit ullam incidunt, molestias laborum. Nesciunt similique nulla eum consequuntur eligendi facilis corrupti saepe!
            </p>
        </div>
        <ul class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <?php $marques = new WP_Query([
                'post_type' => 'marque',
                'posts_per_page' => -1
            ]); ?>
            <?php while ($marques->have_posts()) : $marques->the_post(); ?>
                <li class="border rounded-lg">
                    <div class="flex flex-col justify-center p-4 items-center h-[120px]">
                        <?php the_post_thumbnail('full', ['class' => '']) ?>
                    <div class="space-y-2">
                            <h4 class="text-gray-800 font-semibold"><?php the_title(); ?></h4>
                            <p class="text-gray-600 text-sm"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                    <div class="py-2 px-2 border-t text-center">
                        <a href="<?php the_permalink(); ?>" class="text-picton-blue hover:text-indigo-dye text-sm font-medium">
                            Découvrir
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>