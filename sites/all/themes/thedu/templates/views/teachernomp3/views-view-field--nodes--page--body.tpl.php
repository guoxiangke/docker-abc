<?php
if($output==0){
  echo l('<span class="glyphicon glyphicon-edit" style="color:red;"></span>','node/'.$row->nid.'/edit',array('html'=>true,'attributes'=>array('title'=>'Add Class note!')));
}else{
  echo l('<span class="glyphicon glyphicon-check"></span>','node/'.$row->nid,array('html'=>true,'attributes'=>array('title'=>'Review Class Notes!')));
}
global $user;
if(date('z')<=281 && in_array('teacher', $user->roles)){
  drupal_set_message(('Attention please! After 2017/10/01, if the ClassRecord wasn\'t marked attendance! the class won\'t be count to pay! please also upload the Mp3 and note, thanks all!'), 'error', FALSE);
}
?>
<?php //print $output; ?>

