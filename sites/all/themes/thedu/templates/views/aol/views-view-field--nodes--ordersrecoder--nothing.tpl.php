<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
$flag = flag_get_flag('ask_for_leave');
$flag2 = flag_get_flag('mark_finished_class');
if($flag->is_flagged($row->nid)){//如果标记了请假
  $output = '<span class="glyphicon glyphicon-exclamation-sign"></span>'.$flag->theme('unflag', $row->nid, array('needs_wrapping_element' => FALSE));
}else{
  if(!$flag2->is_flagged($row->nid)){//如果标记
    $output = '<span class="glyphicon glyphicon-question-sign"></span>'.$flag2->theme('flag', $row->nid, array('needs_wrapping_element' => FALSE));
    $output .=  '<span class="glyphicon glyphicon-exclamation-sign"></span>'.$flag->theme('flag', $row->nid, array('needs_wrapping_element' => FALSE));
  }else{
    $output = '<span class="glyphicon glyphicon-ok-circle"></span>'.$flag2->theme('unflag', $row->nid, array('needs_wrapping_element' => FALSE));
  }
}
?>
<?php print $output; ?>
