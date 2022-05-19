<?php  session_start();
if(!isset($_SESSION["email"]))
{
    header('Location:signin.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" style="border:1px solid #ccc" >
    <br class="container">
    <h1>Add Product</h1>

    <hr>
    <label for="pName"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Product Name" name="txtProductName" id="txtProductName" required>

    <label for="Image"><b>File</b></br></br></label>
    <input type="file" name="fileImage" id="fileImage">

    <label for="price" ></br></br> <b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="txtPrice" id="txtPrice" required>

    <label for="chkPublish"><b>Publish</b></label>
    <input type="checkbox" name="chkPublish" id="chkPublish" />Publish this<br />

    <div class="clearfix">
        <button type="submit" class="button" name="btnSubmit" id="btnSubmit">Update </button>
        <button type="submit" class="button" style="background-color: red" name="btnDelete" id="btnDelete" >Delete</button>
        <button type="button" class="button" style="background-color: black" onclick="goHome()">Home</button>
        <button type="button" class="button" style="background-color: firebrick" onclick="clearAll()">Cancel</button>

    </div>
    </div>
</form>
<?php
//Display information

$con=mysqli_connect("localhost","root","","ECommerce");

if(!$con)
{
    die("cannot connect to the DB server");
}
$sql="SELECT * FROM `product` WHERE `id`='".$_GET["id"]."'";

$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0) {
    $row = mysqli_fetch_assoc($results);
    echo "
    <script>document.getElementById('txtProductName').value='".$row['name']."';
    document.getElementById('txtPrice').value='".$row['price']."';
    </script>";

}
?>
<?php
//UPDATE

if(isset($_POST["btnSubmit"]))
{
    $title= $_POST["txtProductName"];
    $price= $_POST["txtPrice"];
    $upload_folder = "uploads/";

    $image = $upload_folder . basename($_FILES["fileImage"]["name"]);
    move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);

    //move an uploaded file from a temprory location to a new location(file,newl
    if(isset($_POST["chkPublish"]))
    {
        $status=1;
    }else{
        $status=0;
    }

    $sql ="UPDATE `product` SET `email`='".$_SESSION["email"]."',`name`='".$title."',`price`='".$price."',`path`='".$image."',`post`='".$status."' WHERE id='".$_GET["id"]."'";


    if (mysqli_query($con,$sql))
    {
        echo "<script>alert('FILE UPDATED');
               document.getElementById('txtProductName').value='';
               document.getElementById('txtPrice').value='';

                </script>";
    }else{
        echo "<script>alert('ERROR FILE UPDATED')</script>";
    }
}

?>
<?php
//Delete

if(isset($_POST["btnDelete"])){
    $sql ="DELETE FROM `product` WHERE id='".$_GET["id"]."'";
    if (mysqli_query($con,$sql))
    {
        echo "<script>alert('FILE Deleted');

                </script>";
    }else{
        echo "<script>alert('ERROR FILE Deleted')</script>";
    }
}
?>
<script>

    function clearAll() {
        document.getElementById("txtProductName").value = "";
        document.getElementById("txtPrice").value = "";
    }
    function goHome(){
        window.location.href="adminHome.php"
    }
</script>
</body>
</html>
