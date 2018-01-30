<link rel="stylesheet" type="text/css" href="style.css">

<<?php include "header.php";?>
<br><br>

<?php
include "helper.php"; ?>
<?php $id = $_GET['id'];
$todo = getCsvFile();
// unset($todo[$id]);
// addArrayToCsv($todo);
$y = date(Y,$todo[$id]['deadline']);
$m = date(n,$todo[$id]['deadline']);
$d = date(j,$todo[$id]['deadline']);

?>

<div class="container">
  <div class="col-md-6 offset-md-3 ">

<form action="edit.help.php?id=<?php echo $id?>" method = "post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $todo[$id]["title"] ?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name = "description"  value="<?php echo $todo[$id]["description"] ?>"  placeholder="Enter description">
  </div>
  <div class="form-group">
  <label for="year">year</label>
   <select class="form-control" name = "year">
     <option value= "<?php echo $y ?>" selected="selected"><?php echo $y ?>
 </option>
     <?php for ($i=2018; $i <2025 ; $i++) : ?>
     <option value = "<?php echo $i ?>"><?php echo $i ?></option>
   <?php endfor; ?>
   </select>
   <label for="month">month</label>
    <select class="form-control" name = "month">
      <option value= "<?php echo $m ?>" selected="selected"><?php echo $m ?>
  </option>
      <?php for ($i=1; $i <=12 ; $i++) : ?>
      <option value = "<?php echo $i ?>"><?php echo $i ?></option>
    <?php endfor; ?>
    </select>
    <label for="day">day</label>
     <select class="form-control" name = "day">
       <option value= "<?php echo $d ?>" selected="selected"><?php echo $d ?>
   </option>
       <?php for ($i=1; $i <=31 ; $i++) : ?>
       <option value = "<?php echo $i ?>"><?php echo $i ?></option>
     <?php endfor; ?>
     </select>
     </div>
     <div class="form-group">
       <label for="priority">priority</label>
        <select class="form-control" name = "priority">
          <option value ="<?php echo $todo[$id]["priority"]?>"><?php echo $todo[$id]["priority"] ?></option>
          <?php if ($todo[$id]["priority"]!= "No rush"): ?>
            <option value = "No rush">No rush</option>
          <?php endif; ?>
          <?php if ($todo[$id]["priority"]!= "Normal"): ?>
              <option value = "Normal">Normal</option>
          <?php endif; ?>
          <?php if ($todo[$id]["priority"]!= "Urgent"): ?>
            <option value = "Urgent">Urgent</option>
          <?php endif; ?>
        </select>
     </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div>
