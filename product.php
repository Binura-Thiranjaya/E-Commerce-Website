<?php  session_start();
if(!isset($_SESSION["uname"]))
{
    header('Location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BT-Enterprise</title>
</head>
<body>

<div class="navbar">
    <a href="./home.php">User</a>
    <a href="./home.php">Home</a>
    <a href="cart.php">Cart</a>

    <div class="search-container">
        <form action="">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

</div>
<div class="header">
    <li><h1 style="color: red"><?php echo $_SESSION["uname"]; ?></h1></li>

    <h1 style="text-align: center">Products</h1>
</div>
<section class="productList" style="padding-left: 10%">
    <?php
    $con=mysqli_connect("localhost","root","","ECommerce");

    if(!$con)
    {
        die("cannot connect to the DB server");
    }
    $sql="SELECT * FROM `product`";
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
                        $sql = "INSERT INTO `cart` (`id`, `email`,`ProductID`, `products`,`price`,`path`) VALUES (NULL, '".$_SESSION["uname"]."','".$_GET["id"]."','".$row["name"]."', '".$row["price"]."','".$row["path"]."');";
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
