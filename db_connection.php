<?php
//DB_CONNECTION.PHP

$servername = "localhost";
$username = "root";
$password = "";
$database = "100";

try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully: <br>"; 
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }


	$db = mysqli_connect('localhost', 'root', '', '100');

//  variabelen die we gebruiken
//  starten bij id 0 

	$post_text= "";
	$post_img= "";
    $id = 0;
    $update = false;


// als de input velden ingevuld zijn en er op "save" gedrukt wordt dan wordt er een nieuw record aangemaakt in de database 

	if (isset($_POST['save'])) {
		$post_text = $_POST['post_text'];
		$post_img = $_POST['post_img'];

		mysqli_query($db, "INSERT INTO user_posts (post_text, post_img) VALUES ('$post_text', '$post_img')"); 
		$_SESSION['message'] = "post saved"; 
		header('location: idea.php');
    }
    
// als de input velden ingevuld zijn en er op "update" gedrukt wordt dan wordt de informatie met het bijbehorende 'id' aangepast (geupdate)

    if (isset($_POST['update'])) {
	$id = $_POST['post_id'];
	$post_text = $_POST['post_text'];
	$post_img = $_POST['post_img'];

	mysqli_query($db, "UPDATE user_posts SET post_text='$post_text', post_img='$post_img' WHERE post_id=$id");
	$_SESSION['message'] = "post updated!"; 
	header('location: idea.php');
    }


// men kan er ook voor kiezen om een 'record' te deleten en dat gebeurd met de onderstaande query

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM user_posts WHERE post_id=$id");
        $_SESSION['message'] = "post deleted!"; 
        header('location: idea.php');
    }

