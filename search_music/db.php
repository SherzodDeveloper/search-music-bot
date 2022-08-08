<?php
  $host = 'localhost';
  $username = 'u1775_translate_bot';
  $password = "06022004";
  $dbname = "u1775_translate_bot";

  $conn = mysqli_connect($host,$username,$password,$dbname);
  if (!$conn) {
    echo "MYSQLI_ERRORnn" . mysqli_error($conn);
  }
  function rStr($text){
        global $conn;
        $res = mysqli_real_escape_string($conn,$text);
        return $res;
    }
  $admin = "1020678098";
?>