<!DOCTYPE html>
<html lang="">
<head>
    <title>BT-Enterprise</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
</script>
<!--END JS Part-->
<div id="loader"></div>
<div style="display:none;padding-bottom: 35rem; background-color: whitesmoke" id="myDiv" class="animate-bottom">
    <div class="topnav" id="myTopnav">
        <a href="./home.php">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#update">About</a>
        <a href="./signin.php" class="active">Sign In</a>

        <a href="javascript:void(0);" class="icon" onclick="Open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="header" style="padding-bottom: 35rem;">
        <h1 style="text-align: center;font-size: 3rem;padding-top: 5rem">BT-Enterprise</h1>
        <p style="text-align: center"></p>
        <h3>Largest Electronic Shop</h3>
    </div>
    <section id="about" style="text-align: center;padding-bottom: 35rem;">
        <h1>About</h1>
        <p>Amoung Various Companies</p>
    </section>
    <section id="contact" style="text-align: center;padding-bottom: 35rem;">
        <h1>Contact</h1>
        <p>Amoung Various Companies</p>
    </section>
    <section id="update" style="text-align: center;padding-bottom: 35rem;">
        <h1>About</h1>
        <p>Amoung Various Companies</p>
    </section>
</div>
</body>
</html>
