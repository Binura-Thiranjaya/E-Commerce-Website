<?php  session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/adminHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

</style>
<body>
<ul>
    <li><a class="active" style="font-size: 2.4rem;" href="#home">Home</a></li>
    <li><a href="signin.php" style="font-size: 2.4rem;">LogOut</a></li>
</ul>
<ul>
    <li><h1>Admin Email:</h1></li>
    <li><h1 style="color: red"><?php echo $_SESSION["email"]; ?></h1></li>

</ul>

<table>
    <tr>
        <td><button class="btn"><a href="profile.php"><i class="fa fa-user"></i></a></button></td>
        <td><button class="btn"><a href="signupAdmin.php"><i class="fa fa-plus" style=""></i></a></button></td>
        <td><button class="btn"><a href="crudProduct.php"><i class="fa fa-cart-plus" style=""></i></a></button></td>
    </tr>

</table>

</body>
</html>