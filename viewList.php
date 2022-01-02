<?php
require_once "navbar.php";
require_once "config.php";
    
$sql="SELECT * FROM selldatatb";
$res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)) {

?>
<html>
    <head>
        <script>
            * {
                box-sizing: border-box;
            }
            @media screen and (max-width: 500px) {
            .column {
            width: 100%;
         }
    }
        </script>
    </head>
    <body>
        <center>
        <form action="contact.php" enctype="multipart/form-data" method="POST">
        <div class="column">
            <table>
                <!-- <th class="row" style="border: 4px solid #557C55;"><img src="Images/PHPCODE" height="110px" width="170px" alt="images"></th> -->
                <th class="row" style="border: 4px solid #557C55;"><img src="<?php echo $row['Images'] ?>" height="110px" width="170px" alt="images"></th>
                <tr><td class="row"><button class="btn">Contact Seller</button></td></tr>
                </form>
            </table>
    </div>
        <?php
    }
    ?>
        </center>  
    </body>
</html>