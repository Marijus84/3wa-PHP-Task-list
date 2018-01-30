<?php
// Start the session
session_start();
?>

<?php include "header.php";?>
<br><br>

<?php
include "footer.php";
include "helper.php";?>
<?php



$id = $_GET['id'];


$todo = getCsvFile();

unset($todo[$id]);

addArrayToCsv($todo);
$_SESSION['message'] = 'Deleted succesfully';
header('Location: index.php');


echo "labas";


 ?>
