<?php  

session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"web_project");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
        
        <div class="sign_up">
            <form method="POST" id="login" action="">
                <h2>Admin Login</h1>
        
                   
                <label> Username: </label>
                    <input type="text" name="username"  placeholder="Enter your Username" required><br><br>
                
                <label> Password : </label>
                    <input type="password" name="password"  placeholder="Enter your new password" required><br><br>

                <input type="submit" class="button" name="submit1" ><br>
            
                
             </form>
             <?php

		if(isset($_POST["submit1"]))
		{
			print "testing";
			$res=mysqli_query($link,"select * from loginform where user='$_POST[username]' AND pass='$_POST[password]' ");

			while($row=mysqli_fetch_array($res))
			{
				/*echo "hi";*/
				$_SESSION["admin"]=$row["user"];
				echo "string";
				header('Location: addcart.php');
				print_r($_SESSION);
				/*echo "string";
				?>
				<script type="text/javascript>
				window.location.href="./welcome.php";
				</script>
				<?php*/
			}

		}
	?>
        </div>
</body>
</html>