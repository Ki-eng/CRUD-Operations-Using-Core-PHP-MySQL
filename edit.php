<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dtsa") or die("connection failed");
    $stu_id= $_GET['ID'];
    $sql = "SELECT * FROM internees Where ID= {$stu_id}";
    $result = mysqli_query($conn , $sql) or die("unsuccesfull query"); 
    if(mysqli_num_rows($result)>0){
         while( $row= mysqli_fetch_assoc($result)){

         ?>
    
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="ID" value="<?php echo $row['ID'];  ?>"/>
          <input type="text" name="NAME" value="<?php echo $row['NAME'];  ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="ADDRESS" value="<?php echo $row['ADDRESS'];  ?>"/>
      </div>
      <div class="form-group">
          <label>EDUCATION</label>
          <?php $sql1 = "SELECT * FROM degree " ; 
                $result1 = mysqli_query($conn , $sql1) or die("unsuccessfull query") ;
                if(mysqli_num_rows($result1)>0){
                      echo '<select name="EDUCATION" >';
        
                        while($row1 = mysqli_fetch_assoc($result1)){
                            if($row['EDUCATION']==$row1['CID']){
                                $select = "selected";
                            }else{
                                $select= "";    }            

            echo "<option {$select} value='{$row1['CID']}'> {$row1['CLASSNAME']}</option>";
        }
              
          echo "</select>";
                            }
                    
                
                ?>
      </div>
      <div class="form-group">
          <label>EMAIL</label>
          <input type="text" name="EMAIL" value="<?php echo $row['EMAIL'];  ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }
         }
         ?>
</div>
</div>
</body>
</html>
