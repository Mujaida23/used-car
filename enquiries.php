<?php
require_once "config.php";
require_once "navbar.php";

$msg = $name = $number = ""; 

$sql = "SELECT * FROM enquiretb";
$res=(mysqli_query($conn,$sql));
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        ?>
        <html>
            <body>
                <center>
                <div class="column1">
                    <table class="enq">
                        <tr>
                            <th class="abc">Name</th>
                            <th class="abc">Number</th>
                            <th class="abc">Car</th>
                            <th class="abc">Message</th>
                        </tr>
                        <tr>
                            <td class="abc"><?php echo $name = $row["Name"]; ?></td>
                            <td class="abc"><?php echo $number = $row["Number"]; ?></td>
                            <td class="abc"><?php echo $car = $row["Car"]; ?></td>
                            <td class="abc"><?php echo $msg = $row["Message"]; ?></td>
                        </tr>
                    </table>
                </div>  
                </center>
            </body>
        </html>
        <?php
    }
    mysqli_free_result($res);

mysqli_close($conn);
}
?>

