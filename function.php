<?php
function check_login($con){
    if (isset($_SESSION['uname'])){
        $uname = $_SESSION['uname'];
        $query = "SELECT * FROM `user` WHERE `uname`='$uname' LIMIT 1";

        $result =mysqli_query($con,$query);
        if ($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location:signin.php");
    die;
}