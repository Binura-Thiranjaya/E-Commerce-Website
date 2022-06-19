

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BT-Enterprise</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
    <div class="container">
        <div>
            <img src="./img/back.jpeg" alt="" width="100%" height="400px">
        </div>
    </div>
<hr>
    <div id="product">
        <h1>Daily Deals</h1>

            <?php
            $con=mysqli_connect("localhost","root","","ECommerce");

            if(!$con)
            {
                die("cannot connect to the DB server");
            }
            $sql="SELECT * FROM `product` WHERE `post`=1";
            $results=mysqli_query($con,$sql);
            if(mysqli_num_rows($results)>0)
            {
                while($row=mysqli_fetch_assoc($results))
                {
                    echo "<div class='card'>
                                <img src= '".$row["path"]."' alt=".$row["name"]." style='width:200px; height: 150px';>
                                    <h1>".$row["name"]."</h1>
                                    <p class='price'>Rs.".$row["price"].".00</p>
                            </div>
                        ";
                }
            }
    ?>
    </div>
<hr>
<div id="contact">
            <table>
                <th>About Us</th>
                <th>Navigation</th>                
                <th>Contact Us</th>
                <tr>
                    <td  rowspan="4"><span>BT </span>Enterprise
                    </br>
                    </br>

                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nobis mollitia alias commodi quos ab expedita unde minima laboriosam dicta culpa eveniet exercitationem amet. Corporis illo praesentium culpa. Eaque, assumenda?
                    </td>
                    <td>
                        <li>
                            <a href="">Home</a>
                        </li>
                    </td>
                    <td>
                       <label class="info"> No:071-998 2906</label>
                     </td>                
                </tr>
                <tr>
                    <td>
                        <li>
                            <a href="">Product</a>
                        </li>
                    </td>
                    <td>     
                        <label class="info">Email:binurathiranjaya@gmail.com</label>
                    </td>                    
                </tr>
                <tr>
                    <td>
                        <li>
                            <a href="">Cart</a>
                        </li>                  
                    </td>
                    <td>                       
                        <label class="info">Address:No.100, Yakkala,Gampaha</label>
                    </td>                    
                </tr>
                <tr>
                    <td>
                        <li>
                         <a href="">Login</a>
                        </li>
                    </td>
                    <td>                       
                    </td>                    
                </tr>
            </table>
</div>
    


</body>
<footer>
    <p>Copyright © 2020 M.B.T MADOLUWAGE. All rights reserved</p>
</footer>
</html>