<?php  session_start();
if(!isset($_SESSION["email"]))
{
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/viewProduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ALL STOCK</title>
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
            <a href="./cart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            <a href="./signIn.php" onclick="logOut()">LogOut</a>
        </div>
    </div>
<hr>

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
            echo "<div class='card' xmlns=\"http://www.w3.org/1999/html\">
                        <img src= '" .$row["path"]."' alt='Denim Jeans' style='width:220px; height: 200px'>
                            <h1>".$row["name"]."</h1>
                            <p class='price'>Rs.".$row["price"].".00</p>
                                <p><a href='updateProduct.php?id=".$row["id"]."'><button type='submit'>Update</button></a></p>
                     </div>
                      ";
        }
    }

    ?>


</section>




</body>
</html>
