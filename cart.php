
<?php  session_start();
if(!isset($_SESSION["email"]))
{
    header('Location:signIn.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/cartDe.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
    <title>Document</title>
</head>
<script>
    function logOut(){
        alert("LogOut............");

    }
</script>
<body>
<div  id="navbar">
        <div class="left">
            <a href="./index.php"><label><span class="logo">BT </span>Enterprise</label> </a>
            <a href="./profile.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="./index.php">Help & Contact</a>
        </div>
        <div class="right">
            <a href="./product.php">Product</a>
            <?php
            $con=mysqli_connect("localhost","root","","ECommerce");
            
            if(!$con)
            {
                die("cannot connect to the DB server");
            }
            $sql="SELECT * FROM `cart` WHERE `email`='".$_SESSION["email"]."'";
            
            
            $results=mysqli_query($con,$sql);
            
            $results1=mysqli_num_rows($results);
            echo '<a href="./cart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"><span style="color:black;background-color:aqua;margin:0% 5%;border-radius:15%;padding:10%">'.$results1.'</span></i></a>';
            
            ?>
            <a href="./signIn.php" onclick="logOut()">Logout</a>
        </div>
    </div>
<hr>
<table>
    <tr>
        <th>Product Image</th>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Delete</th>
    </tr>
<?php
$con=mysqli_connect("localhost","root","","ECommerce");

if(!$con)
{
    die("cannot connect to the DB server");
}
$sql="SELECT * FROM `cart` WHERE `email`='".$_SESSION["email"]."'";
$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0)
{
    while($row=mysqli_fetch_assoc($results))
    {
        echo "
    <tr>
        <td>                        
            <img src= '".$row["path"]."' alt='Denim Jeans' style='width:100px; height: 100px'>
        </td>
        <td>                            
            <p>".$row["ProductID"]."</p>
        </td>
        <td>                            
            <p>".$row["products"]."</p>
        </td>
        <td>                            
            <p class='price'>Rs.".$row["price"].".00</p>
        </td>
        <td>                                
            <p><a href='deleteFile.php?id=".$row["id"]."'><button type='submit' name='btnDelete' id='btnDelete' class='btn' onclick='DeleteStock()' >Delete</button></a></p>
        </td>
        
    </tr>
     ";
    }
}

?>
<?php
    
  
   

?>

</table>



<a  class="logout" href="product.php">
Back
</a>

</body>
</html>