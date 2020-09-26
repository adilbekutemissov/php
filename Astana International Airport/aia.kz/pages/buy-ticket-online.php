<?php @include('server/server.php'); ?>
<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Buy a ticket online";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $razdel= "Buy a ticket online";
                @include('../blocks/header2.php');
            ?>
        </header>
        <main>
            <?php  if (isset($_SESSION['login'])) : ?>
                <form action="buy-ticket-online.php" method="post" onsubmit="return ValidateForm()">
                    <div class="container">
                        <div class="form-group">
                            <div class="input-group">
                            <?php @include('../server/errors.php'); ?>
                                <label id="tow" for="toward">Search</label>
                                <input type="text" placeholder="To" id="toward" name="toward" class="input" required />
                                <p class="er"></p>
                                <button type="submit" name="search" class="button4">Find</button>
                            </div>
                        </div>
                        <div id="result">
                            <?php @include('../server/ticket.php'); ?>
                        </div>
                    </div>
                </form>
            <?php else: ?>
            <div class="buy-ticket">
                <p>If you want to buy a ticket, you must log in</p>
            </div>
            <?php endif ?>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
        <?php @include('../blocks/script4.php'); ?>
        <script>if ( window.history.replaceState ) { 
window.history.replaceState( null, null, window.location.href ); 
} </script>
        <script src="../public/js/validate1.js"></script>
    </body>
</html>