<?php get_header(); ?>
<section class="py-16 lg:min-w-[800px]">
  <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl text-center">Actualités</h1>
  <?php if (have_posts()) : ?>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('partials/post'); ?>
        <?php endwhile; ?>
        <?php pbTheme_navigation() ?>
    </div>
  <?php else : ?>
    <p><?php esc_html_e('Désolé, aucun article ne correspond à vos critères.'); ?></p>
    <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1 text-center">
      <a class="inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative" href="<?php echo esc_url(home_url('/')); ?>">
        Accueil
      </a>
    </div>
  <?php endif; ?>
</section>

<?php get_footer(); ?>