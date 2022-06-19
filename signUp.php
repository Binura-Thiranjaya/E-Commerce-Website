<!DOCTYPE html>
<link rel="stylesheet" href="./css/signIn-SignUp.css">
<script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>

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
            <a href="./signIn.php">Login</a>
        </div>
    </div>
<hr>
<div id="signIn">
    <h1>Welcome User, Register </h1>
        <form action="./PHP/signUp.php" method="POST">
            <div>
                <i class="fas fa-user"> UserName</i>
                <input type="text" placeholder="Enter Username" name="uname" id="uname" required>  
            </div>
            <div>
                <i class="fas fa-envelope"> Email</i>
                <input type="email" placeholder="Enter Email" name="email" id="email" required>
            </div>
            <div>
                <i class="fas fa-lock"> Password</i>
                <input type="password" placeholder="Enter Password" name="password_1" id="password_1" required>
            </div>     
            <div>
                <i class="fas fa-lock"> Re-Password</i>
                <input type="password" placeholder="Repeat Password" name="password_2" id="password_2" required>
            </div>   
            <button class="btnsignIn" type="submit" name="signupbtn" id="signupbtn" value="Submit">SignUp</button>
        </form>
  <button type="submit" class="btnsignUp" name="signinbtn" id="signinbtn"><a href="./signIn.php">Sign In</a></button>


</div>

</body>
</html>


