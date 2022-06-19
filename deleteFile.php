
<?php
session_start();
//Delete
 $con=mysqli_connect("localhost","root","","ECommerce");

    if(!$con)
    {
        die("cannot connect to the DB server");
    }
    $sql ="DELETE FROM `cart` WHERE id='".$_GET["id"]."'";
    if (mysqli_query($con,$sql))
    {
        header('Location:cart.php');
    }else{
                header('Location:cart.php');

    }

?>