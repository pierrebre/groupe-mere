<?php

$job_contract_type = get_post_meta(get_the_ID(), '_job_contract_type', true);
$job_location = get_post_meta(get_the_ID(), '_job_location', true);
$job_salary = get_post_meta(get_the_ID(), '_job_salary', true);
$job_marque_id = get_post_meta(get_the_ID(), '_job_marque', true);
$job_sector = get_post_meta(get_the_ID(), '_job_sector', true);

$query = $args['query'];
?>

<a href="<?php the_permalink() ?>"
  class="flex w-full min-w-80 max-w-xl flex-col bg-white rounded-lg shadow border border-gray-200 px-8 py-4 gap-2">
  <p class="text-xl">
    <?php the_title(); ?>
  </p>
  <?= get_template_part('partials/job_tags', null, array('class' => 'mt-1')); ?>
  <p class="mt-1 text-xs text-gray-500">
    <?= time_elapsed_string($query->post->post_date); ?>
  </p>
</a>