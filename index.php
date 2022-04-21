

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<?php
$email = isset($_POST['email']) ? $_POST['email'] : "";
echo $email;
?>
<div class="header-content">
    <div class="container grid-2">
        <div class="column-1">
            <h1 class="header-title"> Binura Thiranjaya Madoluwage</h1>
            <p class="text">
                UNDERGRADUATE | TECHNICAL INSTRUCTOR

            </p>
            <a href="#" target="_blank" class="btn">DownLoand CV</a>
        </div>
        <div class="column-2 image">
            <img src="#" class="points points2" alt="" />
            <p class="img-element">Hisjsjs</p>
            <img src="#" alt="" class="img-element">
        </div>
    </div>
</div>
</body>
</html>



//Check Wheather Data is Already Exits
$check="SELECT * FROM `user` WHERE `email`= '$email' || `uname`='$uname'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
echo "<script>alert('User alreay Exits! Please Check Again!');</script>";
}
//If the data is not already exits new user added
elseif ( $password_1 == $password_2 && $password_1!=null && $uname!=null) {
$sql = "INSERT INTO `user` (`uname`, `email`, `password`,`Utype`) VALUES ('$uname', '$email', '$password_1','$utype');";
mysqli_query($con, $sql);
mysqli_close($con);
}else{
echo "<script>alert('Password Might Be Wrong! Please Check Again!');</script>";
}



<div class="topnav">
    <a class="active" href="./home.php">Logo</a>
    <a href="./home.php">Home</a>
    <a href="./product.php">Product</a>
    <a href="#contact">Contact Us</a>

</div>
<div class="header">
    <h1 style="text-align: center">BT-Enterprise</h1>
    <p style="text-align: center"></p>
    <marquee  style="margin: 1% 43.5%;font-weight: bold;color: #f44336" width="60%" scrollamount="1" direction="up"  height="30px">
        Largest Electronic Shop    </marquee>


    <button class="button button1" ><a href="./signin.php">Sign In</a></button>

</div>