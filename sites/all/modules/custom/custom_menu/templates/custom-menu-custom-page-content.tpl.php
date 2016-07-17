<div class="<?php print ($classes_array[3]); ?>">
  <?php if (!empty($title)): ?>
    <div class="<?php print ($classes_array[2]); ?>">
      <?php print render($title); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($content)): ?>
    <div class="<?php print ($classes_array[1]); ?>">
      <?php print render($content); ?>
    </div>
  <?php endif; ?>
</div>
