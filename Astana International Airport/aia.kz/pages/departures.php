<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Departures";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $razdel= "Departures";
                @include('../blocks/header2.php');
            ?>
        </header>
        <main>
            <div class="top-slide">
                <div class = "animated mov">
                    <div class = "table3">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="7" class = "nazev">Departures</th>
                                </tr>
                                <tr>
                                    <td class="flight">FLIGHT</td>
                                    <td class="airline">AIRLINE</td>
                                    <td class="to">TO</td>
                                    <td class="planned">DATE</td>
                                    <td class="actual">TIME</td>
                                    <td class="status">STATUS</td>
                                    <td class="terminal">TERMINAL</td>
                                </tr>
                            </thead>
                        <?php @include('../server/table3.php'); ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
        <?php @include('../blocks/script4.php'); ?>
    </body>
</html>