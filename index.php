
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  require "second.php";
  require 'third.php';
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8">
  </head>
  <body align='center'>
    <form method="POST" action="index.php" >
    <p>1 <input type="TEXT" name="name" value="" ></p>
    <p>2  <input type="TEXT" name="age" value=""></p>
    <input type="submit" name="read" value="Show database">
    <input type="SUBMIT" name="write" value="Write into DB">
    <br><br><br><br><hr>
    <?php
    if(isset($_POST['read'])) {
    read();
    } elseif (isset($_POST['write'])) {
    write($name, $age);
    } elseif (isset($_POST['delete'])) {
    delete($id);
    } elseif ($_POST['update']) {
    update($name, $age, $id);
    }
    ?>
    <p>Delete/Update number</p>
    <input type="TEXT" name="choiose_num" value=""><br><br>
    <input type="SUBMIT" name="delete" value="delete">
    <input type="SUBMIT" name="update" value="update">
    <hr>
    </form>
  </body>
</html>
<?php
 ?>
