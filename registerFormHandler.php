
<!--
DB_INFO
user_info = tablename;
user_id = PrimaryKey;
user_name =  varchar(32)
user_email = varchar(32)
user_password = varchar(32)
-->

<?php   

        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
        $user_password = $_POST["password1"];
    
        include "db_connection.php";
        try {
                $sql = "INSERT INTO user_info (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";
                        
                $smt = $conn->prepare($sql);
                echo $news_subscription;
                $smt->execute(array(':username' => $user_name, ':email' => $user_email, 
                ':password' => $user_password));
                echo "Registered successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
        header("location:login.php");
     
?>
