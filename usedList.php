<?php
require_once "navbar.php";
require_once "config.php";
session_start();
$rId=$_SESSION['Id'];
$sql = "SELECT * FROM selltb INNER JOIN selldatatb ON selltb.Id=selldatatb.userId WHERE selltb.u_Id='$rId'";
$res = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($res)) {
            ?>

<html>
    <head>
    </head>
    <body>
        <center>
        <div class="column1">
        <table>  
            <!-- <tr><th style="border: 4px solid #557C55;"><img src="Images/PHPCODDE" height="120px" width="200px" alt="images"></th></tr> -->
            <tr><th style="border: 4px solid #557C55;"><img src="<?php echo $row['Images']; ?>" height="120px" width="200px" alt="images"></th></tr> 
            <tr>
                <th class="abc">City</th>
                <th class="abc">Year</th>
                <th class="abc">Model</th>
                </tr>
            <tr>
                <td class="abc"><?php echo $city = $row["City"]; ?></td>
                <td class="abc"><?php echo $year = $row["Manufactured"]; ?></td>
                <td class="abc"><?php echo $model = $row["Model"]; ?></td>
                </tr>
            <tr>
                <td><button class="btn"><a class="btn-lnk" href="editBtn.php?Id=<?php echo $row['userId']?>">Edit</a></button>
                <button class="btn"><a class="btn-lnk" href="delete.php?Id=<?php echo $row['userId']?>">Delete</a></button></td><br>
                </tr>
            </table></div>
        <?php 
    }     
        ?>
        </center>
    </body>
</html>

