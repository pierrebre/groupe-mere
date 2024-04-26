<div class="flex flex-row items-center bg-gray-100 rounded px-2 py-1 w-fit">
  <span class="dashicons text-sm <?= $args['icon'] ?? ''; ?>"></span>
  <p class="text-xs <?= $args['class'] ?? ''; ?>">
    <?= $args['content']; ?>
  </p>
</div>