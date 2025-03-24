<?php
    $stu_id = $_GET['ID'];
    $conn = mysqli_connect("localhost", "root", "", "dtsa") or die("connection failed.");

    $sql = "DELETE FROM internees where ID = $stu_id";
    $result = mysqli_query($conn, $sql) or die ("query unsuccessfull");
    header("Location: http://localhost/crud-dtsa/index.php");
    mysqli_close($conn); 
    ?>
