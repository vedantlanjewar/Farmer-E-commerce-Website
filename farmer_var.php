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
$land=$_REQUEST['land'];
$landunit=$_REQUEST['landunit'];
$password=$_REQUEST['password'];

$sql="insert into farmer(first_name,last_name,mobile_no,date_of_birth,email,address,pincode,state,land,land_unit,password) values('$fname','$lname','$mobile','$date','$email','$address',$pincode,'$state',$land,'$landunit','$password');";
$result = $conn->query($sql);
if($result)
{
  header('Location: login_farmer.php');

}
else
{
echo "Error";
}
$conn->close();
?>



