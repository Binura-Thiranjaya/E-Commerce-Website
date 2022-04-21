<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BT-Enterprise - Customer Page</title>
    <link rel="stylesheet" href="./css/customerHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>
<div>
    <h1>Welcome <i><strong> <?php echo  $_SESSION['uname']; ?></strong></i></h1>
        <p>

        </p>
</div>
<table>
    <tr>
        <td><p>Home
                <a  class="btn" href="home.php">
                    <i class="fa fa-home"  aria-hidden="true"></i>
                </a></p>
        </td>
        <td><p>Products
                <a  class="btn" href="product.php">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </a></p>
        </td>
        <td><p>Cart <a  class="btn" href="cart.php">
                    <i class="fa fa-cart-arrow-down"  aria-hidden="true"></i>
                </a></p>

        </td>
    </tr>
    <tr>
        <td></td>
        <td ></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td ></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td><p style="font-size: 2rem;color: darkred">LogOut <a  class="btn" href="cart.php" style="font-size: 2rem;color: darkred;">
                    <i class="fa fa-sign-out" style="transform: rotate(180deg);" aria-hidden="true"></i>
                </a></p></td>
        <td></td>
    </tr>

</table>





</body>
</html>
