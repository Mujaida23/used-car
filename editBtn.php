<?php
session_start();
$rowId =  $_GET['Id'];
$_SESSION['eId']=$rowId;
include "navbar.php";
include "config.php";

$sql = "SELECT * FROM selltb AS s1 INNER JOIN selldatatb AS s2 ON s1.Id = s2.userId WHERE s1.Id='$rowId'";
$res = mysqli_query($conn, $sql);

?>

<html>
<head>
</head>
    <div class="container">
        <p class="para1" style="color: #C7B198;">Just fill your information and get started!</p>
</div>
<center>
    <form action="editBtn1.php" enctype="multipart/form-data" method="POST">
    <?php
    while ($row = mysqli_fetch_array($res))
   
     {
?>
<table>

    <tr>
        <td>City*</td>
        <td><input type="text" class="in1" name="city" value="<?php echo $row['City']; ?>">
    
    </td>
    </tr>
    <tr>
        <td>Pincode*</td>
        <td><input type="text" class="in1" name="pincode" value="<?php echo $row['Pincode']; ?>" ></td>
    </tr>
</table>
    <h5>CAR INFORMATION</h5>
    <table>
    <tr>
        <td>MFG YEAR*</td>
        <td><input type="year" class="in1" name="mfg" value="<?php echo $row['Manufactured']; ?>"></td>
    </tr>
    <tr>
        <td>Make*</td>
        <td><select name="cars" id="cars" value="<?php echo $row['Cars']; ?>">
        <option value="suzuki">Suzuki</option>
        <option value="bmw">BMW</option>
        <option value="ford">Ford</option>
        <option value="audi">Audi</option>
        </select></td>
    </tr>
    <tr>
        <td>Model*</td>
        <td><input type="text" class="in1" name="model" value="<?php echo $row['Model']; ?>"></td>
    </tr>
    <tr>
        <td>KMs Driven</td>
        <td><input type="text" class="in1" name="kms" value="<?php echo $row['KmsDriven']; ?>"></td>
    </tr>
    <tr>
        <td>No.of Owners</td>
        <td><input type="number" class="in1" name="owners" value="<?php echo $row['No_ofOwners']; ?>"></td>
    </tr>
    <tr>
        <td>Expected Prize</td>
        <td><input type="text" class="in1" name="prize" value="<?php echo $row['Prize']; ?>"></td>
    </tr>
    </table>
    <table>
    <tr>
    <td>Upload Image</td>
    <td><img src="<?php echo $row['Images']; ?>" alt="images" height="110px" width="170px"></td></tr>
    <tr>
        <td></td>
        <td><input type="file" name="fileUpload"></td>
    </tr>
</table>
    <h5>CONTACT INFORMATION</h5>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" class="in1" name="name" value="<?php echo $row['Name']; ?>"></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><input type="text" class="in1" name="mob" value="<?php echo $row['Mobile']; ?>"></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><input type="email" class="in1" name="email" value="<?php echo $row['EmailID']; ?>"></td>
        </tr>
        </table>
        <table>
    <tr>
        <td><input type="checkbox" id="myCheck" name="check" required></td>
        <td style="color: #C7B198;">I agree with the terms and conditions</td>
</tr>
    </table>
    <input type="submit" class="btn" name="check" value="POST LISTING">
    <?php
    }
    ?>
    </form>
    </center>
    </div>
</body>
</html>