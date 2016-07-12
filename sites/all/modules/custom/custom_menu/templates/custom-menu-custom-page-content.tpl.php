<div class="rendered">
  <?php if (!empty($title)): ?>
    <div class="title-callback">
      <?php print render($title); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($content)): ?>
    <div class="show-content">
      <?php print render($content); ?>
    </div>
  <?php endif; ?>
</div>
