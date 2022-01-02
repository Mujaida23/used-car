<?php
include "navbar.php";
?>
<html>
<body>
    <div class="container">
        <p class="para1" style="color: #C7B198;">Just Fill Your Information And Get Started!</p>
</div>
<center>
    <form action="sell1.php" method="POST">
<table>
    <tr>
        <td>City*</td>
        <td><input type="text" class="in1" name="city" required>
    
    </td>
    </tr>
    <tr>
        <td>Pincode*</td>
        <td><input type="text" class="in1" name="pin" required></td>
    </tr>
</table>
    <h5>CAR INFORMATION</h5>
    <table>
    <tr>
        <td>MFG YEAR*</td>
        <td><input type="year" class="in1" name="mfg" required></td>
    </tr>
    <tr>
        <td>Make*</td>
        <td><select name="cars" id="cars" required>
        <option value=" Suzuki">Suzuki</option>
        <option value="Bmw">BMW</option>
        <option value="Ford">Ford</option>
        <option value="Audi">Audi</option>
        </select></td>
    </tr>
    <tr>
        <td>Model*</td>
        <td><input type="text" class="in1" name="model" required></td>
    </tr>
    <tr>
        <td>KMs Driven</td>
        <td><input type="text" class="in1" name="kms"></td>
    </tr>
    <tr>
        <td>No.of Owners</td>
        <td><input type="number" class="in1" name="owners"></td>
    </tr>
    <tr>
        <td>Expected Prize</td>
        <td><input type="text" class="in1" name="prize"></td>
    </tr>
</table>
    <h5>CONTACT INFORMATION</h5>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" class="in1" name="name"></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><input type="text" class="in1" name="mob"></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><input type="email" class="in1" name="email"></td>
        </tr>
        </table>
        <table>
    <tr>
        <td><input type="checkbox" id="myCheck" name="check" required></td>
        <td style="color: #C7B198">I agree with the terms and conditions</td>
</tr>
    </table>
    <input type="submit" class="btn" name="check" value="POST LISTING">
    </form>
    </center>
    </div>
</body>
</html>