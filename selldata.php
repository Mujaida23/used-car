<?php 
require_once "navbar.php";
?>
<html>
<body>
    <center>
    <form action="selldata1.php" method="POST" enctype="multipart/form-data">
    <div class="container">
    Upload Image <input type="file" name="fileUpload" id="fileUpload">
    </div>
<h5 class="list">LISTING DETAILS</h5>
    <table>
        <tr>
            <td>Fuel Type</td>
            <td><select name="fuel" id="fuel" required>
        <option value="Default">Select a fuel</option>
        <option value="petrol">Petrol</option>
        <option value="diesel">Diesel</option>
        <option value="kerosene">Kerosene</option>
        <option value="coal">Coal</option>
        </select></td>
        </tr>
        <tr>
            <td>Colour</td>
            <td><select name="color" id="color" required>
        <option value="Default">Select a colour</option>
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="white">White</option>
        <option value="yellow">Yellow</option>
        </select></td>
        </tr>
        <tr>
            <td>Registration Number</td>
            <td><input type="text" class="in1" name="regnumber"></td>
        </tr>
        <tr>
            <td>Insurance Valid Till</td>
            <td><input type="date" class="in1" name="insure"></td>
        </tr>
        <tr>
            <td>Tell the buyer why you should buy your Car</td>
            <td><input type="text" class="in1" name="why"></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn" name="check" value="POST LISTING"></td>
        </tr>
    </table>
    </center>
    </form>
</body>
</html>