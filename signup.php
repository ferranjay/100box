<?php 
    require "header.php";
?>

    <main>
        <div class="jumbotron wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                    <?php
                        if (isset($_GET['error'])){
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p class="signuperror">Fill in all fields!</p>';
                            }
                        }
                    ?>
                <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" class="btn btn-info" name="signup-submit">Signup</button>
            </form>
            </section>
        </div>
    </main>


<?php
    require "footer.php";
?>
