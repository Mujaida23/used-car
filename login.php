<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Car</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css?<version=1>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="bg-img" style="background-image: url('images/redcar.jpg'); height:120%; width:100%;">
    <div>
    <h1>USED CAR</h1>
</div>
    <div class="coloring">
    <div class="container">
        <h3>Member's Login</h3>
    </div>
            <div class="login">
            <form action="login1.php" method="POST">

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" name="login" class="btn">Login</button>
            </form>

            <form action="register.php" method="POST">
            <button type="submit" name="register" class="btn">Register</button>
            </form>
            </div>

            <div class="headline">
            <table class="coloring">
            <div class="container">
            <h3>Search?</h3>
            </div>   
                
            <form action="" method="POST">
            <tr>
            <td >Model</td>
            <td><select name="cars" id="cars" required>
            <option value="Suzuki">Suzuki</option>
            <option value="Bmw">BMW</option>
            <option value="Ford">Ford</option>
            <option value="Audi">Audi</option>
            </select></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><input type="text" name="year" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn">Go</button></td>
        </tr>
            </form>
            <tr>
            <td>City</td>
            <td><input type="text" name="city" required></td>
        </tr>
        </form>

            <form action="" method="POST">
            <tr>
                <td></td>
                <td><button class="btn"> Search </button></td></tr>
            </table>
            </form>
            </div>
         </div>
    </body>
</html>