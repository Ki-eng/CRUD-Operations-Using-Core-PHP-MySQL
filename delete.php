<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Delete Record</h2>
       <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="ID" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
    if(isset($_POST['deletebtn'])){ 
    $conn = mysqli_connect("localhost", "root", "", "dtsa") or die("connection failed.");

    $stu_id = $_POST['ID'];
    $sql = "DELETE FROM internees where ID = {$stu_id} ";
    $result = mysqli_query($conn, $sql) or die ("query unsuccessfull");
    header("Location: http://localhost/crud-dtsa/index.php");
    mysqli_close($conn); }
    ?>
</div>
</div>
</body>
</html>

