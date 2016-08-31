<?php
/**
 * @file
 * Hooks module field_group_markup.
 */

/**
 * Implements hook_field_group_markup_data_alter().
 */
function hook_field_group_markup_data_alter(&$data) {
  $view_mode = $data['element']['#view_mode'];
  $entity_type = $data['element']['#entity_type'];
  $bundle = $data['element']['#bundle'];
  $group_name = $data['group']->group_name;

  $entity = $data['element']['#entity'];

  switch ("{$entity_type}:{$bundle}") {
    case 'field_collection_item:field_application_steps':
      if ($group_name == 'group_test') {
        $data['markup'] = 'Example <strong>html</strong> markup.';
      }
      break;
  }
}
