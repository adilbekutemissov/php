<?php
// connect to database
$con = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace');
mysqli_select_db($con, 'utemiadi');

    // define how many results you want per page
    $results_per_page = 5;

    // find out the number of results stored in database
    $sql='SELECT * FROM connections';
    $result = mysqli_query($con, $sql);
    $number_of_results = mysqli_num_rows($result);

    // determine number of total pages available
    $number_of_pages = ceil($number_of_results/$results_per_page);

    // determine which page number visitor is currently on
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    
    // determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page-1)*$results_per_page;

    // retrieve selected results from database and display them on page
    $sql='SELECT * FROM connections ORDER BY id DESC LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)) {
    $output .='
        <tr>
            <td>'.$row["arrival flight"].'</td>
            <td>'.$row["departure flight"].'</td>
            <td>'.$row["arrival airline"].'</td>
            <td>'.$row["departure airline"].'</td>
            <td>'.$row["of"].'</td>
            <td>'.$row["toward"].'</td>
            <td>'.$row["arrival date"].'</td>
            <td>'.$row["departure date"].'</td>
            <td>'.$row["arrival time"].'</td>
            <td>'.$row["departure time"].'</td>
            <td>'.$row["arrival status"].'</td>
            <td>'.$row["departure status"].'</td>
            <td>'.$row["arrival terminal"].'</td>
            <td>'.$row["departure terminal"].'</td>
        </tr>';
    }
    $output .= '
        </table>';
    // display the links to the pages
    echo $output;
    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<a href="../pages/connections.php?page=' . $page . '">' . $page . '</a> ';
    }
    ?>