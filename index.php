<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To do list</title>
  </head>
  <body>



<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL|E_STRICT);


include "helper.php";

$mas = getCsvFile();








$todo = getCsvFile();
$count = count($todo);

$perPage = 4;
$pageCount = ceil($count/$perPage);


$psl = 1;
if (array_key_exists("psl",$_GET)){
  $psl = $_GET["psl"];
}

$from = $perPage*($psl-1);
 $till =  $perPage*$psl-1;
 if ($till > ($count-1)) {
   $till = ($count-1);
 }

include "index.view.php";











// $date = mktime (0,0,0,1,29,2000);
// //echo $date;
// //"<br>"
//
// $newDate = date("Y/m/d",$date);
// //echo $newDate;
//
// $mas = [
//   ['name' => 'Zana', 'age' => "44"],
//   ['name' => 'Petras', 'age' => "35"],
//   ['name' => 'Petras', 'age' => "21"]
// ];
//
// //Reikia sukurti masyva kaip rakta
// $name = [];
// foreach ($mas as $value) {
//   $name[] = $value['name'];
// }
//
//
// // foreach ($name as $value) {
// //   echo $value."<br>";
// // }
//
// array_multisort($name, SORT_DESC, $mas);
//
// foreach ($mas as $value) {
//   echo $value["name"].' - '.$value["age"]."<br>";
// }


   ?>




  </body>
</html>
