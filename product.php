<?php  session_start();
if(!isset($_SESSION["email"]))
{
    header('Location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/viewProduct.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BT-Enterprise</title>
</head>
<script>
    function logOut(){
        alert("LogOut............");
    }
</script>
<style>
     #navbar{
        font-family: arial, sans-serif;
    }
</style>
<body>

<div  id="navbar">
        <div class="left">
            <a href="./index.php"><label><span>BT </span>Enterprise</label> </a>
            <a href="./profile.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="./index.php">Help & Contact</a>
        </div>
        <div class="right">
            <a href="./product.php">Product</a>
            <?php
            $con=mysqli_connect("localhost","root","","ECommerce");
            
            if(!$con)
            {
                die("cannot connect to the DB server");
            }
            $sql="SELECT * FROM `cart` WHERE `email`='".$_SESSION["email"]."'";
            
            
            $results=mysqli_query($con,$sql);
            
            $results1=mysqli_num_rows($results);
            echo '<a href="./cart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"><span style="color:black;background-color:aqua;margin:0% 5%;border-radius:15%;padding:10%">'.$results1.'</span></i></a>';
            
            ?>
                        <a href="./signIn.php" onclick="logOut()">LogOut</a>
        </div>
    </div>
<hr>

<div class="header">

    <h1 style="text-align: center">Products</h1>
</div>
<section class="productList" style="padding-left: 10%">
    <?php
    $con=mysqli_connect("localhost","root","","ECommerce");

    if(!$con)
    {
        die("cannot connect to the DB server");
    }
    $sql="SELECT * FROM `product` WHERE `post`=1";
    $results=mysqli_query($con,$sql);
    if(mysqli_num_rows($results)>0)
    {
        while($row=mysqli_fetch_assoc($results))
        {
            echo "<div class='card'>
                        <img src= '".$row["path"]."' alt='Denim Jeans' style='width:220px; height: 200px'>
                            <h1>".$row["name"]."</h1>
                            <p class='price'>Rs.".$row["price"].".00</p>
                                <p><a href='product.php?id=".$row["id"]."'><button type='submit' >Add to Cart</button></a></p>
                     </div>
                ";
        }

    }

    ?>
    <?php

                $sql="SELECT * FROM `product` WHERE `id`='".$_GET["id"]."'";

                $results=mysqli_query($con,$sql);
                    if(mysqli_num_rows($results)>0) {
                $row = mysqli_fetch_assoc($results);
                        $sql = "INSERT INTO `cart` (`id`, `email`,`ProductID`, `products`,`price`,`path`) VALUES (NULL, '".$_SESSION["email"]."','".$_GET["id"]."','".$row["name"]."', '".$row["price"]."','".$row["path"]."');";
                        if(mysqli_query($con, $sql))
                        {
                            echo "<script>alert('ADDED');</script>";
                            header("Location: cart.php");

                        }else{
                            echo "<script>alert('Password Might Be Wrong! Please Check Again!');</script>";
                        }
    }
    ?>

</section>
</body>
</html>
