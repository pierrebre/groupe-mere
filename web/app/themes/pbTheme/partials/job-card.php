<?php

$job_contract_type = get_post_meta(get_the_ID(), '_job_contract_type', true);
$job_location = get_post_meta(get_the_ID(), '_job_location', true);
$job_salary = get_post_meta(get_the_ID(), '_job_salary', true);
$job_marque = get_post_meta(get_the_ID(), '_job_marque', true);
$job_sector = get_post_meta(get_the_ID(), '_job_sector', true);

$query = $args['query'];
?>

<a href="<?php the_permalink() ?>"
  class="flex w-full min-w-80 flex-col bg-white rounded-lg shadow border border-gray-200 px-8 py-4 gap-2">
  <p class="text-xl">
    <?php the_title(); ?>
  </p>
  <div class="flex flex-row flex-wrap gap-2">
    <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
      <span class="dashicons dashicons-media-document text-sm"></span>
      <p class="uppercase text-xs">
        <?php
        echo $job_contract_type;
        ?>
      </p>
    </div>
    <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
      <span class="dashicons dashicons-money-alt text-sm"></span>
      <p class="text-xs">
        <?php
        echo format_price($job_salary);
        ?>
      </p>
    </div>
    <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
      <span class="dashicons dashicons-building text-sm"></span>
      <p class="text-xs">
        <?= find_marque($job_marque);
        ?>
      </p>
    </div>
    <div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
      <span class="dashicons dashicons-location text-sm"></span>
      <p class="text-xs">
        <?= $job_location;
        ?>
      </p>
    </div>
  </div>
  <p class="mt-1 text-xs text-gray-500">
    <?= time_elapsed_string($query->post->post_date); ?>
  </p>
</a>