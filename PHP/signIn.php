<?php
session_start();
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
        header('Location:../product.php');
    }
    else{
        $checkAdmin = "SELECT * FROM `user` WHERE `email`= '$email' AND `password` ='$password' AND `Utype`='admin' LIMIT 1";
        $results=mysqli_query($con,$checkAdmin);//execute sql query

        if(mysqli_num_rows($results)>0)//if(($username=="test@gmail.com")&&($password=="test123"))
        {
            header('Location:../adminHome.php');        }
        else
        {
            header('Location:../signIn.php');   
  
        }
    }
    $_SESSION["email"]=$email;


}
?>