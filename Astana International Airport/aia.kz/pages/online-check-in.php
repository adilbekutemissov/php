<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Online check in";
            @include('../blocks/head2.php');
            ?>
    </head>
    <body>
        <header>
            <?php
                $razdel= "Online check in";
                @include('../blocks/header2.php');
                ?>
        </header>
        <main>
            <?php  if (isset($_SESSION['login'])) : ?>
                <form action="online-check-in.php" method="post">
                    <div class="container">
                        <h2>Tickets</h2>
                        <div class="form-group">
                            <div class="input-group">
                                <button type="submit" name="show" class="button4">Show</button>
                                <?php @include('../server/ticket2.php'); ?>
                            </div>
                        </div>
                    </div>
                </form>
            <?php else: ?>
                asdasd
            <?php endif ?>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
        <?php @include('../blocks/script4.php'); ?>
    </body>
</html>