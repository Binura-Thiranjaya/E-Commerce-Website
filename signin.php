<?php  session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>BT-Enterprise - Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body onload="myFunction()" style="margin:0;">
<?php
if(isset($_POST["signinbtn"]))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $utype = "customer";
    $valid  =false;

    $con=mysqli_connect("localhost","root","","ECommerce");

    if(!$con)
    {
        die("cannot connect to the DB server");
    }

    $check = "SELECT * FROM `user` WHERE `email`= '$email' AND `password` ='$password' AND `Utype`='$utype' LIMIT 1";
    $results=mysqli_query($con,$check);//execute sql query

    if(mysqli_num_rows($results)>0)//if(($username=="test@gmail.com")&&($password=="test123"))
    {
        $valid=true;
    }
    else
    {
        $valid=false;
    }
    if($valid)
    {
        $_SESSION["uname"]=$email;
        header('Location:customerHome.php');
    }
    else{
        $checkAdmin = "SELECT * FROM `user` WHERE `email`= '$email' AND `password` ='$password' AND `Utype`='admin' LIMIT 1";
        $results=mysqli_query($con,$checkAdmin);//execute sql query

        if(mysqli_num_rows($results)>0)//if(($username=="test@gmail.com")&&($password=="test123"))
        {
            $_SESSION["email"]=$email;
            header('Location:adminHome.php');        }
        else
        {
            echo("Please enter correct username and password");
        }
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
            <p style="font-size: 1rem;font-weight: bold">Home Page <a href="./home.php" style="color:dodgerblue">Home Page</a>.</p>


            <div class="clearfix">
                <button type="submit" class="signinbtn" name="signinbtn" id="signinbtn" >Sign In</button>
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
