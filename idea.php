<?php 
include "db_connection.php";     
?>

<?php 
include "header.php";
?>


  <body>
    <nav id="navsection" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php"><img id="logo" src="img/100.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="idea.php">Idea Box</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php 
                        session_start();
                          if(isset($_SESSION['LOGGED_IN'])){
                                echo $_SESSION{'oeser_neem'};
                            }else{
                                echo "<p> something went wrong, please try again! </p>";
                            } ?></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM user_posts WHERE post_id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$post_text = $n['post_text'];
            $post_img = $n['post_img'];
		}
	}
?>


<h3 id="ideatext">Post a new idea or share information</h3>

<!-- Deze code geeft een bevestigingsbericht weer om de gebruiker te laten weten dat er een nieuw record in de database is aangemaakt. -->
    
    <?php if (isset($_SESSION['message'])): ?>
	    <div class="msg">
		    <?php 
			    echo $_SESSION['message']; 
			    unset($_SESSION['message']);
		    ?>
	    </div>
		<?php endif ?>
		
<!-- De databaserecords ophalen en deze op de pagina weergeven -->

    <?php $results = mysqli_query($db, "SELECT * FROM user_posts"); ?>

    <table>
	    <thead>
		    <tr>
			    <th>TEXT</th>
			    <th>IMAGE</th>
			    <th colspan="2">ACTION</th>
		    </tr>
			</thead>

	<!-- Specifiek neerzetten van de information in de bijbehorende rows -->

	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['post_text']; ?></td>
			<td><?php echo $row['post_img']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >EDIT</a>
			</td>
			<td>
				<a href="db_connection.php?del=<?php echo $row['id']; ?>" class="del_btn">DELETE</a>
			</td>
		</tr>
    <?php } ?>
    </table>


    <form method="post" action="db_connection.php" >
			<div class="input-group">
				<label>TEXT</label>
				<input type="text" name="post_text" value="<?php echo $post_text; ?>">
			</div>
			<div class="input-group">
				<label>ADD IMAGE</label>
				<input type="file" class="form-control-file" name="post_img" value="<?php echo $post_img; ?>">
			</div>

    <!-- nieuw toegevoegd veld wat niet zichtbaar hoeft te zijn bij het updaten van de database-->
      <div class="input-group">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
      </div>
			<div class="input-group">
          <?php if ($update == true): ?>
	          <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
              <?php else: ?>
	          <button class="btn" type="submit" name="save" >SAVE</button>
          <?php endif ?>
			</div>
		</form>

    


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>