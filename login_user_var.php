<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
    <?php

include_once "includes/dbi.php";

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$sql="select * from user where email='$email' and password='$password';";
$result = $conn->query($sql);
if(($result->num_rows)>0)
{
  header('Location: shop_page.php');

}
else
{
    echo '<script>alert("Wrong Email or Password !!")</script>'; 
    echo '<script>window.location.replace("login.php");</script>';

}
$conn->close();
?>
        
</body>
</html>














