<?php
require "header.php";
?>

    <main>

    <div>
            <img id="cube" src="img/3d.png" alt="cube">
        </div>

        <div class="jumbotron">
          <div class="wrapper-main">
            <section class="section-default">
            <?php
                if (isset($_SESSION["userId"])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                          <button class="btn btn-light" type="sumbit" name="logout-submit">Logout</button>
                          </form>';
                    } else {
                        echo ' <form id="form" action="includes/login.inc.php" method="post">
                               <input type="text" name="mailuid" placeholder="Username / E-mail"><br>
                               <input type="password" name="pwd" placeholder="Password"><br>
                               <button class="btn btn-light" type="sumbit" name="login-submit">Login</button>
                               <a href="signup.php" class="btn btn-info">Signup</a>
                               </form>';
                    }
            ?>
            </section>
          </div>
        </div>
    </main>


<?php
require "footer.php";
?>


