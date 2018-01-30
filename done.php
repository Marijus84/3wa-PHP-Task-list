
<?php


include "header.php";
include "header.php";?>
<br><br>

<?php
include "helper.php";?>
<?php



$id = $_GET['id'];


$todo = getCsvFile();

if($todo[$id]["done"]== 0){
    $todo[$id]["done"] = 1;
}else{
    $todo[$id]["done"] = 0;
}





addArrayToCsv($todo);

header('Location: index.php');

 ?>
