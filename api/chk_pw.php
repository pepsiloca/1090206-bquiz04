<?php

include_once "../base.php";

$table=$_GET['table'];

$acc=$_GET['acc'];
$pw=$_GET['pw'];
$chk=$Member->find(['acc'=>$acc,'pw'=>$pw]);
if(!empty($chk)){
    echo 1;
    $_SESSION['mem']=$acc;
}else{
    echo 0;
}

?>