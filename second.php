<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "mine";

$name = $_POST['name'];
$age = $_POST['age'];
$id = $_POST['choiose_num'];



function read() {
  global $dbhost, $dbuser, $dbpass, $dbname;
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $query = "select * from people";
  $result = mysqli_query($connection, $query);

  echo "<select name='database'>";
  while($row = mysqli_fetch_row($result)) {
    echo "<option value=" . $row[0] . ">";
    echo  $row[0] . " " . $row[1];
    echo "</option>";
  }
  echo "</select>";
  echo "<br>";

  mysqli_free_result($result);
  mysqli_close($connection);
#  include_once("index.php");
}

function write($name, $age) {
  global $dbhost, $dbuser, $dbpass, $dbname;
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $query = "INSERT INTO people(name, age) VALUES ('{$name}', '{$age}')";
  $result = mysqli_query($connection, $query);

  mysqli_free_result($result);
  mysqli_close($connection);
#  include "index.php";
}

function delete($number) {
  global $dbhost, $dbuser, $dbpass, $dbname;
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $query = "DELETE FROM people WHERE id={$number}";
  $result = mysqli_query($connection, $query);

  mysqli_free_result($result);
  mysqli_close($connection);
  read();
}

function update($name, $age, $id) {
  global $dbhost, $dbuser, $dbpass, $dbname;
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $query = "UPDATE people SET name='$name', age='$age' where id='$id'";
  $result = mysqli_query($connection, $query);

  mysqli_free_result($result);
  mysqli_close($connection);
  read();
}







 ?>
