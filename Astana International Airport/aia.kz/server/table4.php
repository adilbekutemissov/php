<?php
// connect to database
$con = mysqli_connect('wa.toad.cz','utemiadi','webove aplikace');
mysqli_select_db($con, 'utemiadi');

    // define how many results you want per page
    $results_per_page = 8;

    // find out the number of results stored in database
    $sql='SELECT * FROM arrivals';
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
    $sql='SELECT * FROM arrivals ORDER BY id DESC LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)) {
    $output .='
        <tr>
            <td>'.$row["flight"].'</td>
            <td>'.$row["airline"].'</td>
            <td>'.$row["of"].'</td>
            <td>'.$row["date"].'</td>
            <td>'.$row["time"].'</td>
            <td>'.$row["status"].'</td>
            <td>'.$row["terminal"].'</td>
        </tr>';
    }
    $output .= '
        </table>';
    // display the links to the pages
    echo $output;
    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<a href="../pages/arrivals.php?page=' . $page . '">' . $page . '</a> ';
    }
    ?>