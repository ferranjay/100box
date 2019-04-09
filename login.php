<?php 
include "db_connection.php";     
?>

<!DOCTYPE html>

<html lang="en-US">
<head>
    <link rel="stylesheet" type="text/css" href="#"/>
    <title>Login</title>
</head>


<body>

    <form class="loginForm" action="loginFormHandler.php" method="POST">
        <h1>Login</h1>
        <label for="username">Email:</label>
        <input type="email" id="username" name="user_email" autofocus required/>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password" required/>

        <button type="submit" class="submitButton">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>



</body>
</html>