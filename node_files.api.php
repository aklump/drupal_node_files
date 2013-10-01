<?php
/**
 * @file
 * API documentation for node_files module.
 *
 * @addtogroup hooks
 * @{
 */

/**
 * Implements hook_node_files_settings_alter().
 */
function hook_node_files_settings_alter(&$settings) {

  // Add additional token types to the node form tree.
  $settings['token_tree']['types'][] = 'node';

  // Change the fieldname of the files on the node type.
  $settings['field_name'] = 'field_files';

  // Set this to FALSE if you have too many files to list; this changes the
  // results of token_info from listing every file to just showing the token
  // pattern.
  $settings['show_all'] = FALSE;
}

/** @} */ //end of group hooks
