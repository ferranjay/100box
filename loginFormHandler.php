<?php
    
    include "db_connection.php";
    if(isset($_POST['user_email']) && isset($_POST['user_password'])){
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $result = "SELECT user_name
                   FROM user_info 
                   WHERE user_email = '$user_email' 
                   AND user_password = '$user_password'";
        
        $db_result = $conn->query($result);

        if ($db_result->rowCount() != 0){
        
            foreach($db_result as $row){
            $user_name = $row['user_name'];
            }

            echo "welcome " . $user_name;
        }
        else 
        {
            echo 'The username or password is incorrect!';
            header("location:login.php?et=1;");
        }

        $conn = null;
    }else{
            echo "please fill in your email and password";
    }
?>