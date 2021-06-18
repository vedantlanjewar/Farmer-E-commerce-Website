<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
        
        <div class="sign_up">
            <form method="POST" id="login" action="login_user_var.php">
                <h2>Login</h1>
        
                   
                <label> E-mail: </label>
                    <input type="email" name="email"  placeholder="Enter your email"><br><br>
                
                <label> Password : </label>
                    <input type="password" name="password"  placeholder="Enter your new password"><br><br>

                <input type="submit" class="button" name="submit" ><br>
                <a id="registered" href="userlogin.php">New User ?</a>
                
             </form>
        </div>
</body>
</html>