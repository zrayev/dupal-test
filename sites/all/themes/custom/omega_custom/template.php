<?php

function THEMENAME_preprocess_page(&$variables) {
  if (!empty($variables['node'])) {
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }
}
