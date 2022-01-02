<?php
include "navbar.php";
?>
    <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "pwd") {
                    $("#pass").show();
                } else {
                    $("#pass").hide();
                }
            });
        });
        </script>
        <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "email") {
                    $("#mail").show();
                } else {
                    $("#mail").hide();
                }
            });
        });
    </script>
    </head>
<body>
    <div class="container">
    <p class="para-a">Register Now?</p>
    </div>
    
<center>
    <form action="editprf1.php" method="POST">
<table>
    <tr>
        <td>Name<span>*</span></td>
        <td><input type="text" class="in1" name="name" required>
    
    </td>
</tr>
        <td>Mobile Number<span>*</span></td>
        <td><input type="text" class="in1" name="mobile" required></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><input type="text" class="in1" name="phone" ></td>
    </tr>
    <tr>
        <td>State<span>*</span></td>
        <td><select name="state" id="state" required>
        <option value="Default">Select state</option>
        <option value="Kerala">Kerala</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        </select></td>
    </tr>
        <tr>
        <td>City<span>*</span></td>
        <td><select name="city" id="city" required>
        <option value="Default">Select city</option>
        <option value="Kochi">Kochi</option>
        <option value="Chennai">Chennai</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Hyderabad">Hyderabad</option>
        </select></td>
        </tr>
        <tr>
            <td>Street/Address<span>*</span></td>
            <td><textarea name="address" id="address" cols="19" rows="4" required></textarea></td>
        </tr>
        <tr>
            <td>Postal Code<span>*</span></td>
            <td><input type="postal" class="in1" name="pin" required></td>
        </tr>
    </table>
        <div class="container">
    <p class="para-a">Your Login Information</p>
    <table>
        <tr>
            <td><input type="radio" name="check" value="pwd"></td>
            <td>Password</td> 
        </tr> 
        <tr>
            <td></td>
            <td><input type="text" style="display:none;" placeholder="enter new password" name="pass" id="pass"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" style="display:none;" placeholder="enter new email" name="mail" id="mail"></td>
        </tr>
        <tr>
        <td><input type="radio" name="check" value="email"></td>
        <td>Email</td>
        </tr>
    </table>
    </div>
    <table>
        <tr>
            <td><button class="btn" name="submit" type="submit">Submit</button></td>
        </tr>
    </table>
    </div>
    </form>
    </center>
</body>
</html>