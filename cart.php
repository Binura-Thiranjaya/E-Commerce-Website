
<?php  session_start();
if(!isset($_SESSION["uname"]))
{
    header('Location:signin.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
    <title>Document</title>
</head>
<body>

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
$sql="SELECT * FROM `cart` WHERE `email`='".$_SESSION["uname"]."'";


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
            <p><a href='deleteFile.php?id=".$row["id"]."'><button type='submit' name='btnDelete' id='btnDelete' onclick='DeleteStock()' >Delete</button></a></p>
        </td>
        
    </tr>
     ";
    }
}

?>
    <?php
    //Delete

    if(isset($_POST["btnDelete"])){
            echo "<script>alert('ERROR FILE Deleted')</script>";

    }
    ?>


</table>



<a  class="btn" href="product.php" style="font-size: 2rem;color: darkred;">
    <i class="fa fa-sign-out" style="transform: rotate(180deg);" aria-hidden="true"></i>
</a>

</body>
</html>