<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * upei50 theme.
 */


function upei50_css_alter(&$css) {
  //unset($css[drupal_get_path('theme', 'omega') . '/omega/css/modules/system/system.menus.theme.css']);
  unset($css['/sites/all/themes/omega/omega/css/modules/system/system.menus.theme.css']);

}


