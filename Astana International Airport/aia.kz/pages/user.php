<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "My account";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $razdel= "My account";
                @include('../blocks/header2.php');
            ?>
        </header>
        <main>
            <?php  if (isset($_SESSION['login'])) : ?>
                <form action="user.php" method="post">
                    <div class="container">
                        <div class="form-group">
                            <div class="input-group">
                                <div id ="result">
                                    <?php @include('../server/user.php'); ?>
                                </div>
                            </div>
                        </div>
                        <h2>Tickets</h2>
                        <div class="form-group">
                            <div class="input-group">
                                <button type="submit" name="show" class="button4">Show</button>
                            </div>
                        </div>
                        <div id ="result">
                            <p><?php @include('../server/ticket2.php'); ?></p>
                        </div>
                    </div>
                </form>
            <?php endif ?>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
    <?php @include('../blocks/script4.php'); ?>
    </body>
</html>