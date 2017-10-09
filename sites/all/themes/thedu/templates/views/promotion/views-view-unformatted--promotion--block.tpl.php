<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $count =0;foreach ($rows as $id => $row): ?>
<?php if($count%3==0):?> <div class='row'><?php endif;?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php $count++;if($count%3==0):?> </div> <?php endif;?>
<?php endforeach; ?>
<style type="text/css">
  .view-promotion .views-row .twitter{
    display: block;
    height: 400px;
    margin-top: 30px;
    padding: 0;
    text-align: center;
    border: #f6f7f7 solid 2px;
    overflow: hidden;
  }
  .view-promotion .row .views-field-body{
    width: 80%;
    margin: 24px auto 0;
  }
  .view-promotion .row .user-picture img{
  display: inline-block;
    position: relative;
    margin: 50px 0 0;
    width: 90px;
    height: 90px;
    background-size: cover;
    border-radius: 50%;
}
</style>
