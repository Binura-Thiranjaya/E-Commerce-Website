<?php  session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/menuadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<table>
    <tr>
        <td><button class="btn" style="background-color: purple;"><a href="signupAdmin.php">User</a></button></td>
        <td><button class="btn" style="background-color: blue;"><a href="allProduct.php">View</a></button></td>
        <td><button class="btn" style="background-color: black;"><a href="crudProduct.php">Product</a></button></td>
    </tr>

</table>

</body>
</html>