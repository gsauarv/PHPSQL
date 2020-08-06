<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'loginsystem';

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if(mysqli_connect_errno()){
    echo "Connection Established Failed";
  }

  else {
    echo "Connection Esatablished";
  }
