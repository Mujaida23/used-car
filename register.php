<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Car</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="bg-img" style="background-image: url('images/redcar.jpg'); height:100%; width:100%;">
    <div>
    <h1>USED CAR</h1>
    <div class="container">
    <p class="para-a">Register Now?</p>
    </div>
    
<center>
    <form action="register1.php" method="POST">
<table>
    <tr>
        <td>Name*</td>
        <td><input type="text" class="in1" name="name" required>
    
    </td>
    </tr>
    <tr>
        <td>Email*</td>
        <td><input type="email" class="in1" name="email" required></td>
    </tr>
    <tr>
        <td>Confirm Email*</td>
        <td><input type="email" class="in1" name="cemail" required></td>
    </tr>
    <tr>
        <td>Password*</td>
        <td><input type="password" class="in1" name="pwd" required></td>
    </tr>
    <tr>
        <td>Confirm Password*</td>
        <td><input type="password" class="in1" name="cpwd" required></td>
    </tr>
    <tr>
        <td>Mobile Number*</td>
        <td><input type="text" class="in1" name="mobile" required></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><input type="text" class="in1" name="phone" ></td>
    </tr>
    <tr>
        <td>State*</td>
        <td><select name="state" id="state" required>
        <option value="select">Select state</option>
        <option value="Kerala">Kerala</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        </select></td>
    </tr>
        <tr>
        <td>City*</td>
        <td><select name="city" id="city" required>
        <option value="select">Select city</option>
        <option value="Kochi">Kochi</option>
        <option value="Chennai">Chennai</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Hyderabad">Hyderabad</option>
        </select></td>
        </tr>
        <tr>
            <td>Street/Address*</td>
            <td><textarea name="address" id="address" cols="19" rows="4" required></textarea></td>
        </tr>
        <tr>
            <td>Postal Code*</td>
            <td><input type="postal" class="in1" name="pin" required></td>
        </tr>
        <tr>
            <td><button class="btn" name="submit">Submit</button></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>