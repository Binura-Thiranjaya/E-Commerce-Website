
<?php
session_start();


$con = mysqli_connect('localhost','root','','ECommerce');
if(!$con)
{
    die("Something went wrong....Please try again....");
}
