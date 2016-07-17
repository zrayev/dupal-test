<div class="<?php print ($classes_array[1]); ?>">
  <?php if (!empty($custom_element['element1'])): ?>
    <div class="<?php print ($classes_array[2]); ?>">
      <?php print render($custom_element['element1']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($custom_element['element2'])): ?>
    <div class="<?php print ($classes_array[2]); ?>">
      <?php print render($custom_element['element2']); ?>
    </div>
  <?php endif; ?>
</div>
