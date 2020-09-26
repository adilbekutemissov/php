<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Connections";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php 
                $razdel = "Connections";
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
                                <th colspan="14" class = "nazev">Connections</th>
                            </tr>
                            <tr>
                                <td class="flight">Arr Flight</td>
                                <td class="flight">Dep Flight</td>
                                <td class="airline">Arr Airline</td>
                                <td class="airline">Dep Airline</td>
                                <td class="to">From</td>
                                <td class="to">To</td>
                                <td class="planned">Arr Date</td>
                                <td class="planned">Dep Date</td>
                                <td class="planned">Arr Time</td>
                                <td class="planned">Dep Time</td>
                                <td class="status">Arr Status</td>
                                <td class="status">Dep Status</td>
                                <td class="terminal">Arr Terminal</td>
                                <td class="terminal">Dep Terminal</td>
                            </tr>
                        </thead>
                        <?php @include('../server/table-connection.php'); ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
        <?php @include('../blocks/script2.php'); ?>
    </body>
</html>