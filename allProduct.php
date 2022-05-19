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
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ALL STOCK</title>
</head>
<body>
<h1><?php echo $_SESSION["email"] ?></h1>

<div class="navbar">
    <a href="./home.php">User</a>
    <a href="./home.php">Home</a>
    <a href="#news">Cart</a>

    <div class="search-container">
        <form action="">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

</div>
<div class="header">
    <h1 style="text-align: center">ALL STOCK</h1>
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
            echo "<div class='card' xmlns=\"http://www.w3.org/1999/html\">
                        <img src= '" .$row["path"]."' alt='Denim Jeans' style='width:220px; height: 200px'>
                            <h1>".$row["name"]."</h1>
                            <p class='price'>Rs.".$row["price"].".00</p>
                                <p><a href='updateProduct.php?id=".$row["id"]."'><button type='submit' onclick='update()'>Update</button></a></p>
                     </div>
                      ";
        }
    }

    ?>


</section>




</body>
</html>
