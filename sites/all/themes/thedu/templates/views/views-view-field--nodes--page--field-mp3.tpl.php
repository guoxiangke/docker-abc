<?php
if($output==0){
  echo l('<span class="glyphicon glyphicon-floppy-remove" style="color:red"></span>','node/'.$row->nid.'/edit',array('html'=>true,'attributes'=>array('title'=>'Add Class recording!')));
}else{
  echo l('<span class="glyphicon glyphicon-floppy-saved"></span>','node/'.$row->nid,array('html'=>true,'attributes'=>array('title'=>'Review Class record!')));
}
?>
<?php //print $output; ?>
