
<!DOCTYPE html>
<html>
<head>
    <title>BT-Enterprise - Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body onload="myFunction()" style="margin:0;">
<!--PHP Part-->

<?php
session_start();
$con = mysqli_connect('localhost','root','','ECommerce');
if(!$con)
{
    die("Something went wrong....Please try again....");
}
include("function.php");
if (isset($_POST["signupbtn"])){
    $uname= $_POST['uname'];
    $email = $_POST['email'];
    $password_1 =$_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $utype ="admin";

    if ( $password_1 == $password_2 ) {
        $sql = "INSERT INTO `user` (`uname`, `email`, `password`,`Utype`) VALUES ('$uname', '$email', '$password_1','$utype');";
        mysqli_query($con, $sql);

        header("Location: signin.php");
        die;
    }else{
        echo "<script>alert('Password Might Be Wrong! Please Check Again!');</script>";
    }
}
?>
<!--END PHP Part-->

<!--JS Part-->
<script>
    function showMsg(){
        let text = "Information you fill will be disaper if you click OK!\nThank You\nBT-Enterprise.";
        if (confirm(text) == true) {
            window.location.href = "./privacy.php";
        } else {
            alert("Please Fill the Form");
        }
    }

    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        document.getElementById("uname").value = "";
        document.getElementById("email").value = "";
        document.getElementById("password_1").value = "";
        document.getElementById("password_2").value = "";
    }
    function clearAll() {
        document.getElementById("uname").value = "";
        document.getElementById("email").value = "";
        document.getElementById("password_1").value = "";
        document.getElementById("password_2").value = "";
    }
</script>
<!--END JS Part-->
<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
    <form action="" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <label>Before Creating the User, Please Read <a href="#" style="color:dodgerblue" onclick="showMsg()">Terms & Privacy</a>.</label>

            <hr>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_1" id="password_1" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_2" id="password_2" required>

            <p style="font-size: 1rem;font-weight: bold">Already Registered User <a href="./signin.php" style="color:dodgerblue">Sign In</a>.</p>

            <div class="clearfix">
                <button type="submit" class="signupbtn" name="signupbtn" id="signupbtn">Sign Up</button>
                <button type="button" class="cancelbtn" onclick="clearAll()">Cancel</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
