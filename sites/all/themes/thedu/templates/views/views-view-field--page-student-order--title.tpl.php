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
 //		echo $data = $row->{$field->field_nid};
 $total = $row->field_field_class_hour[0]['raw']['value'];
 //dpm($total);
 $finished = count(edu_get_finished_class($row->nid));
	$precent = (float)$finished/(float)$total * 100;
 if($finished == 0) $precent=50;//set default length
?>
<?php print $output; ?>

<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $precent;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $precent;?>%">
    <span><?php echo $finished.'/'.$total;?></span>
  </div>
</div>