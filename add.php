<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="NAME" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="ADDRESS" />
        </div>
        <div class="form-group">
            <label>EDUCATION</label>            
            <select name="EDUCATION">
                <option value="" selected disabled>Select </option>
                <?php
            $conn = mysqli_connect ("localhost", "root" ,"" , "dtsa") or die("Connection failed");
            $sql = "SELECT * FROM degree";
            $result = mysqli_query($conn, $sql) or die ("query failed");
            while ($row = mysqli_fetch_assoc($result)){ 
            ?>
                <option value="<?php echo $row['CID'];?>"><?php echo $row['CLASSNAME'];?></option>
                <?php } ?>  
            </select>
            
        </div>
        <div class="form-group">
            <label>EMAIL</label>
            <input type="text" name="EMAIL" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
