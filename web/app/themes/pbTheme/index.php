<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <div class=" flex flex-col">
    <div class="flex lg:flex-row flex-col flex-wrap justify-between">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/post'); ?>
      <?php endwhile; ?>
      <?php pbTheme_navigation() ?>
    </div>
  </div>
<?php else : ?>
  <p><?php esc_html_e('Désolé, aucun article ne correspond à vos critères.'); ?></p>
  <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1 text-center">
    <a class="inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative" href="<?php echo esc_url(home_url('/')); ?>">
      Accueil
    </a>
  </div>
<?php endif; ?>

<?php get_footer(); ?>