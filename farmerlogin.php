<?php include_once "includes/dbi.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Farmer Sign-up</title>
        <link rel="stylesheet" href="css/usersign.css">
        <script src="js/form.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
        
        <div class="sign_up">
            <form method="post" id="register" action="farmer_var.php" onsubmit=" return validate()">
                <h2>Farmer</h1>
                <label> First Name : </label></td>
                    <input type="text" name="fname"  placeholder="Enter your First Name" required><br><br>
                <label> Last Name : </label>
                    <input type="text" name="lname"  placeholder="Enter your Last Name" required><br><br>
                <label> Mobile no. : </label>
                    <select>
                        <option>+91</option>
                        <option>+92</option>
                        <option>+93</option>
                        <option>+94</option>
                        <option>+95</option>
                        <option>+96</option>
                    </select>
                    <input type="number" name="mobile" placeholder="Enter your Mobile number" required><br><br>
                <label> Date of Birth : </label>
                    <input type="date" name="date"   placeholder="Enter your Date of birth" required><br><br>
                <label> E-mail : </label>
                    <input type="email" name="email"  placeholder="Enter your email" required><br><br>
                <label> Address : </label>
                    <input type="text" name="address"   placeholder="Enter your Address"  required><br><br>
                <label> Pincode : </label>
                    <input type="number" name="pincode"  placeholder="Enter Pincode" required><br><br>
                <label> State :</label>
                    <input type="text" name="state"  placeholder="Enter State" required><br><br>
                <label> Land :</label>
                    <input type="number" name="land"  placeholder="Enter the amount of  land for plantation" required>
                    <select name="landunit" > 
                        <option>Hectare</option>
                        <option>Acre</option>
                        <option>SqKm</option>
                        <option>SqYard</option>
                        <option>SqMile</option>
                    </select><br><br>
                <label> Password : </label>
                    <input type="password" id='pass' name="password"  placeholder="Enter your new password" required><br><br>
                <label> Re-Enter Password : </label>
                    <input type="password" name="rpassword"  id='rpass' placeholder="Re type your password" onchange="passcheck()" required><br><br>
                <input type="submit" class="button" name="submit" ><br>
                <a id="registered" href="login_farmer.php">Already Have An Account ? </a>
             </form>
        </div>
</body>
</html>