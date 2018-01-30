
<?php

function getCsvFile() {
  {
  $read = fopen ("todo.csv", "r");
  $todo  = [];

  $i  = 0;
  while (($a = fgetcsv($read)) !== false)  {
    $todo [] = [
      "title" => $a[0],
      "description" => $a[1],
      "deadline" => $a[2],
      "priority" => $a[3],
      "done" => $a[4]
    ];
    $i++;
  }
  fclose($read);


  // var_dump($todo);
  return $todo;
  }
}



function addArrayToCsv ($todo){


$write = fopen("todo.csv","w");

foreach ($todo as $value) {
  // var_dump($value);
  // die();
  fputcsv($write,[
      $value["title"],
      $value["description"],
      $value["deadline"],
      $value["priority"],
      $value["done"]
]);
}
fclose($write);


}



?>
