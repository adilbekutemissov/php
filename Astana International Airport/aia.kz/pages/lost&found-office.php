<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Lost and found office";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $razdel= "Lost and found office";
                @include('../blocks/header2.php');
            ?>
        </header>
        <main>
            <section class="structure">
                <div class="module__content">
                    <ul id="structure-list"></ul>
                </div>
            </section>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
        <?php @include('../blocks/script2.php'); ?>
    </body>
</html>