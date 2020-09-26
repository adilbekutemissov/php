<?php
    $connect = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
    $output = '';

    if(isset($_POST['show']))
    {
        $query = "SELECT * FROM tickets WHERE login = '".$_SESSION['login']."'";
        
        $result = mysqli_query($connect, $query);
        
        if(mysqli_num_rows($result) > 0)
        {
            $output .= '
                <div class="table-responsive">
                    <table class="tablebordered">
                        <tr>
                            <th>Flight</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date Departure</th>
                            <th>Date Arrival</th>
                            <th>Time Departure</th>
                            <th>Time Arrival</th>
                        </tr>';
                while ($row = mysqli_fetch_array($result))
                {
                    $output .= '
                        <tr>
                            <td>'.$row["flight"].'</td>
                            <td>'.$row["firstname"].'</td>
                            <td>'.$row["lastname"].'</td>
                            <td>'.$row["of"].'</td>
                            <td>'.$row["toward"].'</td>
                            <td>'.$row["departure_date"].'</td>
                            <td>'.$row["arrival_date"].'</td>
                            <td>'.$row["departure_time"].'</td>
                            <td>'.$row["arrival_time"].'</td>
                        </tr>
                    ';
                }
                $output .= 
                    '</table>
                </div>
            ';
            echo $output; 
        }
        else{
            echo "Undifined Toward";
            $firstname = "";
            $lastname = "";
            $departure_date = "";
            $arrival_date = "";
            $of = "";
            $toward = "";
        }
    }
?>
