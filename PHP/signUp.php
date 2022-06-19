<?php
session_start();
$con = mysqli_connect('localhost','root','','ECommerce');
if(!$con)
{
    die("Something went wrong....Please try again....");
}
if (isset($_POST["signupbtn"])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $utype = "customer";

    if ($password_1 == $password_2) {
        $check = "SELECT * FROM `user` WHERE `email`= '$email' AND `password` ='$password_1' AND `Utype`='$utype' LIMIT 1";
        $results = mysqli_query($con, $check);//execute sql query
            if (mysqli_num_rows($results) > 0)//if(($username=="test@gmail.com")&&($password=="test123"))
            {
                $valid = true;
            } else {
                $valid = false;
            }
    }
    else{
        echo "<script>alert('Password Might Be Wrong! Please Check Again!');</script>";
    }
    if($valid){
        echo "<script>alert('Already Created A/C');</script>";
    }else
    {
        $sql = "INSERT INTO `user` (`uname`, `email`, `password`,`Utype`) VALUES ('$uname', '$email', '$password_1','$utype');";
        mysqli_query($con, $sql);
        echo "<script>alert('Successfully login');</script>";
        header("Location: ../signIn.php");
        die;
    }

}
?>