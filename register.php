<?php 
include "db_connection.php";     
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <form action="registerFormHandler.php" method="POST">  
        <input class="input_fields" type="text" name="user_name" placeholder="username" required maxlength="32" autofocus><br>
        <input class="input_fields"type="email" name="user_email" placeholder="email" required maxlength="32"><br>
        <input class="input_fields" type="password" name="password1" minlenght=8 placeholder="password" required maxlength="32"><br>
        <input class="input_fields" type="password" name="password2" placeholder="validate password" required maxlength="32"><br>
        
        <button type="submit">register</button>
    </form>
</body>
</html>
