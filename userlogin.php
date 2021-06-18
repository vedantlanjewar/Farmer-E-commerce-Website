<?php include_once "includes/dbi.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Sign-up</title>
        <link rel="stylesheet" href="css/usersign.css">
        <script src="js/form.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                    background-image:linear-gradient(rgba(0, 0, 0, 0.753),rgba(0, 0, 0, 0.836)), url(images/farmers-market\ login.jpg);
                    height: 100vh;
                    background-size: cover;
                    background-position:center;
                }
        </style>
    </head>
    <body> 
        <div class="sign_up">
            <form method="post" id="register" action="user_var.php" onsubmit=" return validate()" >
                <h2>User</h2>
                <label> First Name : </label></td>
                    <input type="text"  name="fname"  placeholder="Enter your First Name" required ><br><br>
                <label> Last Name : </label>
                    <input type="text" name="lname"  placeholder="Enter your Last Name" required ><br><br>
                <label> Mobile no. : </label>
                    <select>
                        <option>+91</option>
                        <option>+92</option>
                        <option>+93</option>
                        <option>+94</option>
                        <option>+95</option>
                        <option>+96</option>
                    </select>
                    <input type="number" name="mobile" placeholder="Enter your Mobile number" required ><br><br>
                <label> Date of Birth : </label>
                    <input type="date" name="date"   placeholder="Enter your Date of birth" required ><br><br>
                <label> E-mail : </label>
                    <input type="email" name="email"  placeholder="Enter your email" required ><br><br>
                <label> Address : </label>
                    <input type="text" name="address"   placeholder="Enter your Address"  required ><br><br>
                <label> Pincode : </label>
                    <input type="number" name="pincode"  placeholder="Enter Pincode" required ><br><br>
                <label> State :</label>
                    <input type="text" name="state"  placeholder="Enter State" required ><br><br>
                <label> Password : </label>
                    <input type="password" name="password" id="pass" placeholder="Enter your new password" required ><br><br>
                <label> Re-Enter Password : </label>
                    <input type="password" name="rpassword" id="rpass"  placeholder="Re type your password" onchange="passcheck()" required ><br><br>
                <input type="submit" class="button" name="submit" ><br>
                <a id="registered" href="login_user.php">Already Have An Account ? </a>
             </form>
             
        </div>