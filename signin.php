
<!DOCTYPE html>
<html lang="">
<head>
    <title>BT-Enterprise - Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body onload="myFunction()" style="margin:0;">
<?php
session_start();

$con = mysqli_connect('localhost','root','','ECommerce');
if(!$con)
{
    die("Something went wrong....Please try again....");
}
if (isset($_POST["signinbtn"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $utype = "customer";

    $check = "SELECT * FROM `user` WHERE `email`= '$email' AND `password` ='$password' AND `Utype`='$utype' LIMIT 1";
    $result = mysqli_query($con, $check);

    if ($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        $_SESSION["uname"] = $user_data['uname'];
         echo $_SESSION['uname'];
         header('Location: customerHome.php');
    }else{
        echo "<script>alert('Check Detils again')</script>";

    }
    }
?>
<!--JS Part-->
<script>
    let myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        document.getElementById("email").value = "";
        document.getElementById("password").value = "";

    }
</script>
<!--END JS Part-->
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">

    <form action="" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign In</h1>

            <hr>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email"  required>

            <label for="psw"><b>Password</b></label>
            <label for="password"></label><input type="password" placeholder="Enter Password" name="password" id="password" required>

            <p style="font-size: 1rem;font-weight: bold">Create a User A/C <a href="./signup.php" style="color:dodgerblue">Sign Up</a>.</p>

            <div class="clearfix">
                <button type="submit" class="signinbtn" name="signinbtn" id="signinbtn" >Sign In</button>
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
