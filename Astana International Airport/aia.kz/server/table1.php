<?php
    $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
    $output="";
    $res = mysqli_query($db, "SELECT * FROM departures ORDER BY id DESC LIMIT 12");
    $output .= '
        <div class = "table1">
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
                </thead>';
        if(mysqli_num_rows($res) > 0) {
            while($row=mysqli_fetch_array($res)) {
                $output .= '
                    <tr>
                        <td>'.$row["flight"].'</td>
                        <td>'.$row["airline"].'</td>
                        <td>'.$row["toward"].'</td>
                        <td>'.$row["departure date"].'</td>
                        <td>'.$row["departure time"].'</td>
                        <td>'.$row["status"].'</td>
                        <td>'.$row["terminal"].'</td>
                    </tr>
                ';
            }
        }
        $output .= 
            '</table>
            <a href="/~utemiadi/aia.kz/pages/departures.php">Show More</a>
        </div>
    ';
    echo $output;
?>