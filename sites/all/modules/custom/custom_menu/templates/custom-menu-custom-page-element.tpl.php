<div <?php print $title_attributes; ?> class="<?php print $title_classes; ?>">
  <?php if (!empty($custom_element['element1'])): ?>
    <div <?php print $content_attributes; ?> class="<?php print $content_classes; ?>">
      <?php print render($custom_element['element1']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($custom_element['element2'])): ?>
        <div <?php print $content_attributes; ?> class="<?php print $content_classes; ?>">
      <?php print render($custom_element['element2']); ?>
    </div>
  <?php endif; ?>
</div>
