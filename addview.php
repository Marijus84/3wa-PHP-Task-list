<?php include "header.php";?>
<br><br>

<?php
include "footer.php"; ?>
<div class="container">
  <div class="col-md-6 offset-md-3 ">


<form action="add.php" method = "post" >
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name = "description"  placeholder="Enter description">
  </div>
  <div class="form-group">
  <label for="year">year</label>
   <select class="form-control" name = "year">
     <?php for ($i=2018; $i <2025 ; $i++) : ?>
     <option value = "<?php echo $i ?>"><?php echo $i ?></option>
   <?php endfor; ?>
   </select>
   <label for="month">month</label>
    <select class="form-control" name = "month">
      <?php for ($i=1; $i <=12 ; $i++) : ?>
      <option value = "<?php echo $i ?>"><?php echo $i ?></option>
    <?php endfor; ?>
    </select>
    <label for="day">day</label>
     <select class="form-control" name = "day">
       <?php for ($i=1; $i <=31 ; $i++) : ?>
       <option value = "<?php echo $i ?>"><?php echo $i ?></option>
     <?php endfor; ?>
     </select>
     </div>
     <div class="form-group">
       <label for="priority">priority</label>
        <select class="form-control" name = "priority">
          <option value = "No rush">No rush</option>
          <option value = "Normal">Normal</option>
          <option value = "Urgent">Urgent</option>

        </select>
     </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
