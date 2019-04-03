<?php 
    require "header.php";
?>

    <main>

    <div>
            <img id="cube" src="img/3d.png" alt="cube">
        </div>

        <div class="jumbotron">
        <form id="form" action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username / E-mail"><br>
                    <input type="password" name="pwd" placeholder="Password"><br>
                </form>
                <form action="includes/logout.inc.php" method="post">
                    <button class="btn btn-light" type="sumbit" name="login-submit">Login</button>
                    <button class="btn btn-light" type="sumbit" name="logout-submit">Logout</button>  
                </form>
                <button type="button" class="btn btn-info" type="sumbit" name="signup-submit">Signup</button>
        </div>

    <!--
        <div class="wrapper-main">
            <section class="section-default">
                <p class="login-status">You are logged out!</p>
                <p class="login-status">You are logged in!</p>
            </section>
        </div>
    </main>
    -->

<?php
    require "footer.php";
?>

