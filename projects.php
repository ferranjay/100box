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
                    <a class="nav-link" href="video.php">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">&nbsp;&nbsp;&nbsp;&nbsp;<?php 
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

    <div class="card-deck">
  <div class="card">
    <img src="img/tennis.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Project 1</h5>
      <p class="card-text">April 2019 </p>
      <p class="card-text"><a href="#" class="btn btn-outline-danger">Go somewhere</a></p>
    </div>
  </div>
  <div class="card">
    <img src="img/model.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Project 2</h5>
      <p class="card-text">Mei 2019</p>
      <p class="card-text"><a href="#" class="btn btn-outline-danger">Go somewhere</a></p>
    </div>
  </div>
  <div class="card">
    <img src="img/volkswagen.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Project 3</h5>
      <p class="card-text">Mei 2019</p>
      <p class="card-text"><a href="#" class="btn btn-outline-danger">Go somewhere</a></p>
    </div>
  </div>
</div>












    <div class="jumbotron mx-auto">
        
        
    </div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>