<?php
    $connect = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
    $output = '';

        $query = "SELECT firstname, lastname, login, email FROM users WHERE login = '".$_SESSION['login']."'";
        
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0)
        {
            $output .= '
                <div class="table-responsive">
                    <table class="tablebordered">
                        <tr>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>LOGIN</th>
                            <th>EMAIL</th>
                        </tr>';
                while ($row = mysqli_fetch_array($result))
                {
                    $output .= '
                        <tr>
                            <td>'.$row["firstname"].'</td>
                            <td>'.$row["lastname"].'</td>
                            <td>'.$row["login"].'</td>
                            <td>'.$row["email"].'</td>
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
           // echo "Undifined Toward";
            $flight = "";
            $airline = "";
            $date_departure = "";
            $date_arrival = "";
            $planned = "";
            $planned_arrival = "";
            $price = "";
        }
        
        mysqli_free_result($result);
        mysqli_close($connect);
        
?>
