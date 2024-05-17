<?php get_header(); ?>

<section class="py-16">
    <div class="px-4 md:px-8">
        <div class="text-center">
            <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl">
                Nos marques
            </h1>
            <p class="text-gray-600 my-16 text-justify">
                Nous sommes fiers de vous présenter les enseignes qui composent notre groupe et qui se distinguent par leur expertise et leur engagement envers la satisfaction de nos clients. Chaque marque du Groupe Méré reflète notre dévouement à offrir des produits de qualité et des services exceptionnels.

                Le Groupe Méré est constitué de trois grandes franchises : La Halle au Sommeil, Foir'Fouille, et Cavavin. Chacune de ces enseignes a su s'imposer dans son domaine respectif grâce à des valeurs communes de qualité, d'innovation et de proximité avec nos clients. </p>
        </div>
        <ul class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <?php $marques = new WP_Query([
                'post_type' => 'marque',
                'posts_per_page' => -1
            ]); ?>
            <?php while ($marques->have_posts()) : $marques->the_post(); ?>
                <li class="border rounded-lg">
                    <div class="flex flex-col justify-center p-4 items-center h-[120px]">
                        <?php /* the_post_thumbnail('2048x2048', ['class' => '']) */ ?>
                        <div class="space-y-2">
                            <h4 class="text-gray-800 font-semibold"><?php the_title(); ?></h4>
                            <p class="text-gray-600 text-sm"><?php /* the_excerpt() */ ?></p>
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