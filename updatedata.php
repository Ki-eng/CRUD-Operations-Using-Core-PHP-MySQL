<?php 
  $stu_id = $_POST['ID'];
  $stu_name = $_POST['NAME'];
  $stu_add = $_POST['ADDRESS'];
  $stu_class = $_POST['EDUCATION'];
  $stu_phone = $_POST['EMAIL'];

  $conn = mysqli_connect("localhost", "root" , "", "dtsa") or die("connection failed");
  //$sql = "UPDATE student SET sname = ?, saddress = ?, sclass = ?, sphone = ? WHERE sid = ?";
  $sql= "UPDATE internees SET NAME='{$stu_name}', ADDRESS='{$stu_add}', EDUCATION='{$stu_class}', EMAIL='{$stu_phone}' WHERE ID ={$stu_id}";
  $result = mysqli_query($conn, $sql) or die("query failed");

  header("Location: http://localhost/crud-dtsa/index.php");
  mysqli_close($conn);
  ?>

