<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    $conn = mysqli_connect("localhost", "root" , "" , "dtsa") or die ("connection failed"); 
    $sql = "SELECT * FROM internees JOIN degree ON internees.EDUCATION= degree.CID";
    $result = mysqli_query($conn, $sql) or die ("query failed");

    if(mysqli_num_rows($result)> 0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Education</th>
        <th>Email</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>    

            <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['NAME'];?></td>
                <td><?php echo $row['ADDRESS'];?></td>
                <td><?php echo $row['CLASSNAME'];?></td>
                <td><?php echo $row['EMAIL'];?></td>
                <td>
                <a href="edit.php?ID=<?php echo urlencode($row['ID']); ?>">Edit</a>
                    <a href='deleteinline.php?ID=<?php echo $row ['ID']; ?>'>Delete</a>
                </td>
            </tr>
            <?php 
            }
            ?>
            
        </tbody>
    </table>
    
    <?php 
            }else {
                echo "No records found.";
            }
    
    mysqli_close($conn);        
    ?>
</div>
</div>
</body>
</html>
