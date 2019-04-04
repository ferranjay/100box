<?php 
if(isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)) { //als of login of pw niet is ingevuld
        header("Location: ../index.php?error=emptyfields");
        exit(); 
    }
    else {
        $sql = "SELECT * FROM users WHERE emailUsers=?;"; 
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit(); 
        }else {
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            //var_dump( $result );
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit(); 
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    echo " SUCCES!!!!";
                    header("Location: ../home.php?login=success");
                    exit(); 
                }
                else {
                    echo " Verkeerde pw";
                    header("Location: ../index.php?error=wrongpwd");
                    exit(); 
                }
            }else {
                echo " User bestaat niet";
                header("Location: ../index.php");
                exit(); 
            }
        }
    }
}
