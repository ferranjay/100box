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

    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Colorpalletes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Video Producties 100.nl</h5>
    <p class="card-text">Bedrijfsfilms, Aftermovies & MusicVideoclips</p>
  </div>
</div>

    <div id="videocard" class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-12">
      <img src="img/camera.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Camerawerk</h5>
        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div id="videocard" class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-12">
      <img src="img/colorgrade.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Colorgrading</h5>
        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div id="videocard" class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-12">
      <img src="img/lens.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Editing</h5>
        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>