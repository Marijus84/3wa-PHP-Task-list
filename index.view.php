<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title></title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <div class="container">


    <?php
    include "header.php"; ?>
    <?php
    include "footer.php"; ?>

        <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message']['class'] ?>" role="alert">
           <?php echo $_SESSION['message']['msg']?>
        </div>
            <?php unset($_SESSION['message']);?>
        <?php  endif;?>

        <div class="row">

    <div class="col-md-6">
      <ul class="list-group">
        <li class="list-group-item active"><h2>To do list</h2></li>










          <?php for ($i=$from; $i <= $till ; $i++):?>


            <?php if ($mas[$i]["done"]==0): ?>
              <li class="list-group-item"><?php echo htmlspecialchars($mas[$i]["title"])."<br> ".$mas[$i]["description"]."<br>  ".date("Y/m/d",$mas[$i]["deadline"])."<br>  ".$mas[$i]["priority"]; ?>
            <?php endif; ?>
            <?php if ($mas[$i]["done"]==1): ?>
              <li class="list-group-item finished"><?php echo htmlspecialchars($mas[$i]["title"])."<br> ".$mas[$i]["description"]."<br>  ".date("Y/m/d",$mas[$i] ["deadline"])."<br>  ".$mas[$i]["priority"]; ?>
            <?php endif; ?>


            <a href="done.php?id=<?php echo $i?>" class="btn btn-success float-right">Done</a>

            <a href="delete.php?id=<?php echo $i?>" class="btn btn-danger float-right">Delete</a>
            <a href="edit.php?id=<?php echo $i?>" class="btn btn-primary float-right">Edit</a>
            <?php if ($mas[$i]["done"] == 1) {
              ?><div class="float-right">
                <img src="done.png" alt="done" style width="50px" height="50px">
              </div><?php
            } ?>  </li>
          <?php endfor; ?>
      </ul>
      <a href="addview.php" class="btn btn-primary">Add Task</a>
      <ul class="pagination justify-content-end">
        <?php for ($i=1; $i <=$pageCount ; $i++): ?>
          <li class="page-item"><a class="page-link" href="index.php?psl=<?php echo $i?>"><?php echo $i ?></a></li>
        <?php endfor;?>



      </ul>

    </div>
    <div class="col-md-6 img">


        <img src="images.jpg" alt="Make things happen">

    </div>






  </div>

</div>

  </body>
</html>
