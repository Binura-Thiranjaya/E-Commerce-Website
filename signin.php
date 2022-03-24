<!DOCTYPE html>
<html>
<head>
    <title>BT-Enterprise - Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body onload="myFunction()" style="margin:0;">
<!--JS Part-->
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
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
            <input type="email" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_1" id="password_1" required>


            <p style="font-size: 1rem;font-weight: bold">Create a User A/C <a href="./signup.php" style="color:dodgerblue">Sign Up</a>.</p>

            <div class="clearfix">
                <button type="submit" class="signupbtn" name="signupbtn" id="signupbtn">Sign In</button>
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
