<?php   include_once "../base.php";

$Bigs->$Types->all(['parent'=>0]);
foreach($bigs as $b){
    echo "<option value='".$b['id']."'>".$b['name']."</option>";
}

?>