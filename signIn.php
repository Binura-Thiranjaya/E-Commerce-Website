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
            <a href="#navbar"><label><span>BT </span>Enterprise</label> </a>
            <a href="./profile.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="#contact">Help & Contact</a>
        </div>
        <div class="right">
            <a href="./product.php">Product</a>
            <a href="./cart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            <a href="./signIn.php">Login</a>
        </div>
    </div>
<hr>
<div id="signIn">
    <h1>Welcome User</h1>
  <form action="./PHP/signIn.php" method="POST">
                    <i class="fas fa-user"> UserName</i>
                    <input type="text" name="email" id="email"  placeholder="Email" required />
                    <i class="fas fa-lock"> Password</i>
                    <input type="password" name="password" id="password" placeholder="Password" required/>
      <button type="submit" class="btnsignIn" name="signinbtn" id="signinbtn"  />Login</button>

  </form>
  <button type="submit" class="btnsignUp" name="signupbtn" id="signupbtn"><a href="./signUp.php">Sign Up</a></button>


</div>

</body>
</html>


