<div <?php print $attributes; ?> class="<?php print $classes; ?>" >
  <?php if (!empty($title)): ?>
    <div <?php print $title_attributes; ?> class="<?php print $title_classes; ?>" >
      <?php print render($title); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($content)): ?>
    <div <?php print $content_attributes; ?> class="<?php print $content_classes; ?>" >
      <?php print render($content); ?>
    </div>
  <?php endif; ?>
</div>
