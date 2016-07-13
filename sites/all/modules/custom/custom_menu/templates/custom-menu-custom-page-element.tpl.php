<div class="test-render-element">
  <?php if (!empty($custom_element['element1'])): ?>
    <div class="render-content">
      <?php print render($custom_element['element1']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($custom_element['element2'])): ?>
    <div class="render-content">
      <?php print render($custom_element['element2']); ?>
    </div>
  <?php endif; ?>
</div>
