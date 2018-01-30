<?php
include "helper.php";


$id = $_GET['id'];
// $todo = getCsvFile();
//
//
//
//
//
//
//
//


$done = $todo[$id]["done"];
//unset($todo[$id]);

// addArrayToCsv($todo);
 $todo = getCsvFile();
$month = $_POST["month"];
$year = $_POST["year"];
$day = $_POST["day"];

$date = mktime (0,0,0,$month,$day,$year);
$priority = $_POST["priority"];


$todo[$id] = [
  "title" => $_POST["title"],
  "description" => $_POST["description"],
  "deadline" => $date,
  "priority" => $priority,
  "done" => $done
];




addArrayToCsv($todo);


header('Location: index.php');




 ?>
