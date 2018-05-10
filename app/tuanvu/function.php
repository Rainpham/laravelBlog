<?php

function menuMuntil($data,$parent_id=0,$str=""){
	$stt=1;
  foreach ($data as $value) {
    if($value['parent_id']==$parent_id){
      echo '<option value="'.$value['id'].'" >'.$stt++.$str.".".$value["name"].'</option>';
      menuMuntil($data,$value['id'],$str."---");
    }
  }
}
