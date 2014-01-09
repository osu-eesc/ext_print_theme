<?php
/**
 * @file - template.php
 *
 * Theme helper functions
 */

/**
* Implements hook_entity_view_mode_alter().
*/
function ext_print_theme_entity_view_mode_alter(&$view_mode, $context) {
  $node_info = entity_get_info('node');
  if(in_array('print_theme', $node_info)) {
    $view_mode = 'print_theme';
  }
}
