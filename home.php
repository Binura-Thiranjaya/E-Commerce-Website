<!DOCTYPE html>
<html lang="">
<head>
    <title>BT-Enterprise</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    body{
        background-image: url("img/back.jpeg");
         background-color: #cccccc;
        background-size: 1500px 1000px;
        background-position: center;
        background-attachment: fixed;

        background-repeat: no-repeat;


    }
    .heading {
        border-collapse: collapse;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
    }
    .info{
            border-collapse: collapse;
            width: 40%;
            font-size: 1rem;
            margin:0% 33%
    }


    .btn {
        background-color: DodgerBlue; /* Blue background */
        border: none; /* Remove borders */
        color: white; /* White text */
        padding: 12px 16px; /* Some padding */
        font-size: 16px; /* Set a font size */
        cursor: pointer; /* Mouse pointer on hover */
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }
    span{
        color: #f44336;
    }
    footer{
        text-align: center;
        padding: 3px;
        background-color: DarkSalmon;
        color: white;
    }

</style>
<body onload="myFunction()" style="margin:0;">
<!--JS Part-->
<script>
    let myVar;
    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    function Open() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    function SignIn(){
        window.location.href = "signin.php";
    }
</script>
<!--END JS Part-->
<div id="loader"></div>
<div style="display:none; background-color: whitesmoke" id="myDiv" class="animate-bottom">
    <div class="topnav" id="myTopnav">
        <a href="./home.php">Home</a>
        <a href="#contact">Contact</a>
        <a href="./signin.php" class="active">Sign In</a>

        <a href="javascript:void(0);" class="icon" onclick="Open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="header"  >
        <h1 style="text-align: center;font-size: 3rem;padding-top: 5rem">BT-Enterprise</h1>
        <p style="text-align: center"></p>
        <h3>Largest Electronic Shop</h3>
    </div>
    <div style="padding-bottom:15%">
    <table class="heading">

      <tr>
          <td><h6 style="font-size: 1rem" >Being the largest online shopping site in Sri Lanka,<br>
                  <span>BT-ENTERPRISE</span> is home to endless products featured in, <br>* consumer electronics,
                  <br>* home appliances,<br>* fashion and everything </h6>
          </td>
        <td ><button class="btn" onclick="SignIn()"><i class="fa fa-sign-in"></i> Sign In</button></td>
      </tr>


    </table >
    </div >

    <footer>
        <section id="contact" style="text-align: center; ">
            <h1>Contact Us</h1>
            <p>Amoung Various Companies</p>
            <table class="info">
                <tr>
                    <td>Contact No:</td>
                    <td>+94 719982906</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>Colombo 3</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>binurathiranjaya@gmail.com</td>
                </tr>
                <tr>
                    <td>Project By:</td>
                    <td>M.B.T Madoluwage</td>
                </tr>

            </table>
        </section>
    </footer>


</div>
</body>


</html>
