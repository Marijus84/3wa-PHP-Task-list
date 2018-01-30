<?php
// Start the session
session_start();
?>
<?php include "header.php";?>
<br><br>

<?php
include "footer.php"; ?>

<?php


  $month = $_POST["month"];
  $year = $_POST["year"];
  $day = $_POST["day"];

  $date = mktime (0,0,0,$month,$day,$year);
  $priority = $_POST["priority"];
//  var_dump($priority);die();

  $new = [
    "title" => $_POST["title"],
    "description" => $_POST["description"],
    "deadline" => $date,
    "priority" => $priority,
    "done" => 0
  ];

  $write = fopen( "todo.csv", "a");
   fputcsv($write,[
     $new["title"],
     $new["description"],
     $new["deadline"],
     $new["priority"],
     $new["done"]

   ]);
   fclose($write);
   $_SESSION['message'] = [
     'msg'=>'pavyko',
     'class'=> 'danger'
   ];
   header('Location: index.php');





?>
