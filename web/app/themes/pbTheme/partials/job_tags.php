<?php

$post = get_post(get_the_ID());
$job_contract_type = get_post_meta(get_the_ID(), '_job_contract_type', true);
$job_location = get_post_meta(get_the_ID(), '_job_location', true);
$job_salary = get_post_meta(get_the_ID(), '_job_salary', true);
$job_marque_id = get_post_meta(get_the_ID(), '_job_marque', true);
$job_sector = get_post_meta(get_the_ID(), '_job_sector', true);
?>
<div class="flex flex-row flex-wrap gap-2 <?= $args['class'] ?? ''; ?>">
  <?= get_template_part('partials/tag', null, array('icon' => 'dashicons-media-document', 'content' => $job_contract_type, 'class' => 'uppercase')); ?>
  <?= get_template_part('partials/tag', null, array('icon' => 'dashicons-money-alt', 'content' => $job_salary ? format_price($job_salary) : 'Non spécifié')); ?>
  <?= get_template_part('partials/tag', null, array('icon' => 'dashicons-building', 'content' => find_marque($job_marque_id))); ?>
  <?= get_template_part('partials/tag', null, array('icon' => 'dashicons-location', 'content' => $job_location ? $job_location : 'Non spécifié')); ?>
</div>