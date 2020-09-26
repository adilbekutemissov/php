<?php
    $connect = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
    $toward="";
    $output = '';
    $errors = array();

    if(isset($_POST['search']))
    {
        $toward = htmlspecialchars(mysqli_real_escape_string($db, $_POST['toward']));
        
        $query = "SELECT id, `flight`, `airline`,`departure date`,`arrival date`, `departure time`, `arrival time` ,`price` FROM `departures` WHERE `toward` LIKE '$toward'";
        
        $result = mysqli_query($connect, $query);

        
        if(mysqli_num_rows($result) > 0)
        {
            $output .= '
                <div class="table-responsive">
                    <table class="tablebordered">
                        <tr>
                            <th>Flight</th>
                            <th>Airline</th>
                            <th>Date Departure</th>
                            <th>Date Arrival</th>
                            <th>Time Departure</th>
                            <th>Time Arrival</th>
                            <th>Price</th>
                        </tr>';
                while ($row = mysqli_fetch_array($result))
                {
                    $output .= '
                        <tr>
                            <td>'.$row["flight"].'</td>
                            <td>'.$row["airline"].'</td>
                            <td>'.$row["departure date"].'</td>
                            <td>'.$row["arrival date"].'</td> 
                            <td>'.$row["departure time"].'</td>
                            <td>'.$row["arrival time"].'</td>
                            <td>'.$row["price"].' $</td>
                            <th><a href = "/~utemiadi/aia.kz/pages/buy.php?id='.$row["id"].'" name="buy">Buy</th>
                        </tr>
                    ';
                }
                $output .= 
                    '</table>
                </div>
            ';
            echo $output; 
        }
        
        else {
            if (empty($toward)) { 
                echo "<p>To is required</p>";
             }
            else {
            echo "<p>Undifined Toward</p>";
            $flight = "";
            $airline = "";
            $date_departure = "";
            $date_arrival = "";
            $planned = "";
            $planned_arrival = "";
            $price = "";
            }
        }
        
        mysqli_free_result($result);
        mysqli_close($connect);
        
    }

    else{
        $flight = "";
        $airline = "";
        $date_departure = "";
        $date_arrival = "";
        $planned = "";
        $planned_arrival = "";
        $price = "";
    }
?>
