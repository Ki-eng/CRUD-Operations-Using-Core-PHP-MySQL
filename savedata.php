<?php 
  $stu_name = $_POST['NAME'];
  $stu_add = $_POST['ADDRESS'];
  $stu_class = $_POST['EDUCATION'];
  $stu_phone = $_POST['EMAIL'];

  $conn = mysqli_connect("localhost", "root" , "", "dtsa") or die("connection failed");
  $sql= "INSERT INTO internees(NAME, ADDRESS, EDUCATION, EMAIL) values ('{$stu_name}', '{$stu_add}','{$stu_class}','{$stu_phone}')";
  $result = mysqli_query($conn, $sql) or die("query failed");

  header("Location: http://localhost/crud-dtsa/index.php");
  mysqli_close($conn);
  ?>

