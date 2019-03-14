<?php
/**
 * Implements hook_preprocess_block().
 */
function upei50_preprocess_block(&$variables) {

  //ONLY REQUIRED UNTIL https://drupal.org/node/2279155 IS NOT SOLVED
  //Omega prevents menu blocks from being individually overriden
  switch ($variables['block']->module) {
    case 'system':
      switch ($variables['block']->delta) {
        case 'help':
        case 'powered-by':
        case 'main':
          break;

        default:
          $variables['theme_hook_suggestions'][] = 'block__nav__' . str_replace("-", "_", $variables['block']->delta);
          break;
      }
      break;

    case 'menu':
    case 'menu_block':
      $variables['theme_hook_suggestions'][] = 'block__nav__' . str_replace("-", "_", $variables['block']->delta);
      break;
  }

}
