<?php
include "navbar.php";
?>
<html>
    <body>
        <center>
    <div class="container">
    <p class="para-a">SEND MESSAGE</p>
    </div>
    <form action="contact1.php" method="POST">
<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" required>
    
    </td>
    </tr>
    <tr>
        <td>Number</td>
        <td><input type="text" name="number" required></td>
    </tr>
    <tr>
        <td>Car</td>
        <td><select name="cars" id="cars" required>
        <option value="Suzuki">Suzuki</option>
        <option value="Bmw">BMW</option>
        <option value="Ford">Ford</option>
        <option value="Audi">Audi</option>
        </select></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><textarea name="msg" id="msg" cols="22" rows="4"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn" name="send">SEND</button></td>
    </tr>
</table>
</form>
    </center>
</body>
</html>