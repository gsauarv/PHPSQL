<?php

  if(isset($_POST['submitted']))
  {
      include 'include/dbConnection.php';
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $sql = "INSERT INTO people (fname,lname) VALUES (?,?);";
      // Prepared Statements
      $stmt = $conn->prepare($sql);
      $stmt ->bind_param("ss",$fname,$lname);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      $newrecord = "1 record";
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Insert Data into Table</h1>
    <form method="post" action="index.php">
      <input type="hidden" name="submitted" value="true">
      <fieldset>
        <legend>New People</legend>
          <label>First Name<input type="text" name="fname" /></label>
          <label>Last Name<input type="text" name="lname" /></label>

      </fieldset>

      <br>
      <input type="submit" value="add new person">
    </form>

    <?php
      echo $newrecord;
     ?>
  </body>
</html>
