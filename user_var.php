<?php

include_once "includes/dbi.php";

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$mobile=$_REQUEST['mobile'];
$date=$_REQUEST['date'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$pincode=$_REQUEST['pincode'];
$state=$_REQUEST['state'];
$password=$_REQUEST['password'];

$sql="insert into user(first_name,last_name,mobile_no,date_of_birth,email,address,pincode,state,password) values('$fname','$lname','$mobile','$date','$email','$address',$pincode,'$state','$password');";
$result = $conn->query($sql);
if($result)
{
  header('Location: login_user.php');

}
else
{
echo "Error";
}
$conn->close();
?>



