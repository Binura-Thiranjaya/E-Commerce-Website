<?php  session_start();
if(!isset($_SESSION["email"]))
{
    header('Location:signin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<?php
echo"
<h2 style='text-align:center'>User Profile :".$_SESSION["email"]."</h2>"
?>

<?php
//Display information

$con=mysqli_connect("localhost","root","","ECommerce");

if(!$con)
{
    die("cannot connect to the DB server");
}
$sql="SELECT * FROM `user` WHERE `email`='".$_SESSION["email"]."'";

$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0) {
    $row = mysqli_fetch_assoc($results);
    echo '
    <div class="card">
    <img src="img/profile.png" alt="John" style="width:100%">
    <h5>E-Mail:'.$row["email"].'</h5>
    <p>Password:'.$row["password"].'</p>
</div>';

}
?>
</body>
</html>
